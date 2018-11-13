<?php 
	session_start();
	if(isset($_SESSION['name'])){
		include '../config/dbcon.php';
		$id = $_GET['id'];
		$sql = "SELECT * FROM students WHERE id = '$id'"; 
		$run = mysqli_query($con, $sql);
		$data = mysqli_fetch_assoc($run);
	}
	else{
		echo "<script>window.open('../login.php','_self');</script>";
	}
	

 ?>
 <?php 
	 
	require_once('fpdf/fpdf.php');
	$mypdf = new FPDF();
	$mypdf -> AddPage("P","A4",0);
	$mypdf -> SetTitle("Student Information Form");
	$mypdf -> SetFont("Arial","",20);
	$mypdf -> Image("../images/spi_logo.png",15,8,35,35);
	$mypdf -> Image("../images/gov_logo.png",160,8,35,35);
	$mypdf -> Cell(190,15,"Sylhet Polytechnic Institute",0,1,"C");
	$mypdf -> SetFont("Arial","",18);
	$mypdf -> Cell(190,10,"Student Information Form",0,1,"C");
	$mypdf -> SetFont("Arial","",14);
	$mypdf -> Cell(190,8,"Computer Technology",0,1,"C");
	$mypdf -> Cell(190,3,"",0,1,"C");
	$mypdf -> SetFont("Times","","11");
	$mypdf -> SetFillColor(14, 249, 155);
	$mypdf -> Cell(190,7,"Personal Information",0,1,"C",true);
	$mypdf -> SetFillColor(230, 241, 247);
	$mypdf -> Cell(190,1,"",0,1,"C");
	$mypdf -> Cell(65,7,"Student Name:",1,0,"L",true);
	$mypdf -> Cell(85,7,$data['name'],1,1,"C");
	$mypdf -> Cell(65,7,"Father's Name:",1,0,"L",true);
	$mypdf -> Cell(85,7,$data['fname'],1,1,"C");
	$mypdf -> Cell(65,7,"Mother's Name:",1,0,"L",true);
	$mypdf -> Cell(85,7,$data['mname'],1,1,"C");
	$mypdf -> Image("../images/student_img/".$data['image'],162,54,37,47);
	$mypdf -> Cell(65,7,"Date of Birth: ",1,0,"L",true);
	$mypdf -> Cell(85,7,$data['birthdate'],1,1,"C");
	$mypdf -> Cell(65,7,"Contact No: ",1,0,"L",true);
	$mypdf -> Cell(85,7,$data['personalphone'],1,1,"C");
	$mypdf -> Cell(65,7,"Guardine Phone: ",1,0,"L",true);
	$mypdf -> Cell(85,7,$data['homephone'],1,1,"C");
	$mypdf -> Cell(35,7,"Email: ",1,0,"L",true);
	$mypdf -> Cell(62,7,$data['email'],1,0,"C");
	$mypdf -> Cell(30,7,"Blood Group",1,0,"L",true);
	$mypdf -> Cell(23,7,$data['bloodgrp'],1,1,"C");
	$mypdf -> Cell(35,7,"Gender: ",1,0,"L",true);
	$mypdf -> Cell(30,7,$data['sex'],1,0,"C");
	$mypdf -> Cell(32,7,"Relegion: ",1,0,"L",true);
	$mypdf -> Cell(30,7,$data['relegion'],1,0,"C");
	$mypdf -> Cell(23,7,"Quota: ",1,0,"L",true);
	$mypdf -> Cell(39,7,$data['quota'],1,1,"C");
	$mypdf -> Cell(190,1,"",0,1,"C");
	$mypdf -> SetFillColor(14, 249, 155);
	$mypdf -> Cell(190,7,"Address",0,1,"C",true);
	$mypdf -> SetFillColor(230, 241, 247);
	$mypdf -> Cell(190,1,"",0,1,"C");
	$mypdf -> SetFillColor(3,229,251);
	$mypdf -> Cell(95,7,"Mailing Address/Present Address",1,0,"C",true);
	$mypdf -> Cell(95,7,"Permanent Address",1,1,"C",true);
	$mypdf -> SetFillColor(230, 241, 247);
	$mypdf -> Cell(35,7,"Care of : ",1,0,"L",true);
	$mypdf -> Cell(60,7,$data['presentcareof'],1,0,"C");
	$mypdf -> Cell(35,7,"Care of : ",1,0,"L",true);
	$mypdf -> Cell(60,7,$data['percareof'],1,1,"C");
	$mypdf -> Cell(35,7,"Vill/Town/Road: ",1,0,"L",true);
	$mypdf -> Cell(60,7,$data['presentaddrs'],1,0,"C");
	$mypdf -> Cell(35,7,"Vill/Town/Road: ",1,0,"L",true);
	$mypdf -> Cell(60,7,$data['peraddrs'],1,1,"C");
	$mypdf -> Cell(35,7,"PS/Upazila: ",1,0,"L",true);
	$mypdf -> Cell(60,7,$data['prespoliceupzila'],1,0,"C");
	$mypdf -> Cell(35,7,"PS/Upazila:",1,0,"L",true);
	$mypdf -> Cell(60,7,$data['perpoliceupzila'],1,1,"C");
	$mypdf -> Cell(35,7,"Present District: ",1,0,"L",true);
	$mypdf -> Cell(60,7,$data['presenddist'],1,0,"C");
	$mypdf -> Cell(35,7,"Permanent District:",1,0,"L",true);
	$mypdf -> Cell(60,7,$data['permadist'],1,1,"C");
	$mypdf -> Cell(35,7,"Present Division: ",1,0,"L",true);
	$mypdf -> Cell(60,7,$data['presenddist'],1,0,"C");//Change
	$mypdf -> Cell(35,7,"Permanent Division:",1,0,"L",true);
	$mypdf -> Cell(60,7,$data['permadist'],1,1,"C");//Change
	$mypdf -> Cell(190,1,"",0,1,"C");
	$mypdf -> SetFillColor(14, 249, 155);
	$mypdf -> Cell(190,7,"Education Qualification",0,1,"C",true);
	$mypdf -> SetFillColor(230, 241, 247);
	$mypdf -> Cell(190,1,"",0,1,"C");
	$mypdf -> Cell(38,8,"Examination",1,0,"C",true);
	$mypdf -> Cell(38,8,"Board/Institute",1,0,"C",true);
	$mypdf -> Cell(38,8,"Group/Subject/Degree",1,0,"C",true);
	$mypdf -> Cell(38,8,"Result",1,0,"C",true);
	$mypdf -> Cell(38,8,"Year",1,1,"C",true);
	if (!$data['psc']=="") {
		$mypdf -> Cell(38,8,"PSC",1,0,"C");
		$mypdf -> Cell(38,8,$data['pscboard'],1,0,"C");
		$mypdf -> Cell(38,8,$data['pscgrp'],1,0,"C");
		$mypdf -> Cell(38,8,$data['pscres'],1,0,"C");
		$mypdf -> Cell(38,8,$data['pscyear'],1,1,"C");
	}
	$mypdf -> Cell(38,8,"JSC",1,0,"C");
	$mypdf -> Cell(38,8,$data['jscboard'],1,0,"C");
	$mypdf -> Cell(38,8,$data['jscgrp'],1,0,"C");
	$mypdf -> Cell(38,8,$data['jscres'],1,0,"C");
	$mypdf -> Cell(38,8,$data['jscyear'],1,1,"C");
	$mypdf -> Cell(38,8,"SSC",1,0,"C");
	$mypdf -> Cell(38,8,$data['sscboard'],1,0,"C");
	$mypdf -> Cell(38,8,$data['sscgrp'],1,0,"C");
	$mypdf -> Cell(38,8,$data['sscres'],1,0,"C");
	$mypdf -> Cell(38,8,$data['sscyear'],1,1,"C");
	if (!$data['hsc']==""){
		$mypdf -> Cell(38,8,"HSC",1,0,"C");
		$mypdf -> Cell(38,8,$data['hscboard'],1,0,"C");
		$mypdf -> Cell(38,8,$data['hscgrp'],1,0,"C");
		$mypdf -> Cell(38,8,$data['hscres'],1,0,"C");
		$mypdf -> Cell(38,8,$data['hscyear'],1,1,"C");
	}
	if ($data['hsc']=='optional'){
		$mypdf -> Cell(38,8,"HSC",1,0,"C");
		$mypdf -> Cell(38,8,$data['hscboard'],1,0,"C");
		$mypdf -> Cell(38,8,$data['hscgrp'],1,0,"C");
		$mypdf -> Cell(38,8,$data['hscres'],1,0,"C");
		$mypdf -> Cell(38,8,$data['hscyear'],1,1,"C");
	}
	$mypdf -> Cell(190,1,"",0,1,"C");
	$mypdf -> SetFillColor(14, 249, 155);
	$mypdf -> Cell(190,6,"Present Education Status",0,1,"C",true);
	$mypdf -> SetFillColor(230, 241, 247);
	$mypdf -> Cell(190,1,"",0,1,"C");
	$mypdf -> Cell(47.5,6,"Semester",1,0,"L",true);
	$mypdf -> Cell(47.5,6,$data['semester'],1,0,"C");
	$mypdf -> Cell(47.5,6,"Roll",1,0,"L",true);
	$mypdf -> Cell(47.5,6,$data['roll'],1,1,"C");
	$mypdf -> Cell(47.5,6,"Session",1,0,"L",true);
	$mypdf -> Cell(47.5,6,$data['sessions'],1,0,"C");
	$mypdf -> Cell(47.5,6,"Reg No",1,0,"L",true);
	$mypdf -> Cell(47.5,6,$data['registration'],1,1,"C");
	$mypdf -> Cell(47.5,6,"Shift",1,0,"L",true);
	$mypdf -> Cell(47.5,6,$data['shift'],1,0,"C");
	$mypdf -> Cell(47.5,6,"Group",1,0,"L",true);
	$mypdf -> Cell(47.5,6,$data['clggroup'],1,1,"C");
	$mypdf -> Cell(190,2,"",0,1,"C");
	$mypdf -> SetFillColor(14, 249, 155);
	$mypdf -> Cell(190,8,"Semester Wise GPA",0,1,"C",true);
	$mypdf -> SetFillColor(230, 241, 247);
	$mypdf -> Cell(190,1,"",0,1,"C");
	$mypdf -> Cell(21,8,"1st",1,0,"C",true);
	$mypdf -> Cell(21,8,"2nd",1,0,"C",true);
	$mypdf -> Cell(21,8,"3rd",1,0,"C",true);
	$mypdf -> Cell(21,8,"4th",1,0,"C",true);
	$mypdf -> Cell(21,8,"5th",1,0,"C",true);
	$mypdf -> Cell(21,8,"6th",1,0,"C",true);
	$mypdf -> Cell(21,8,"7th",1,0,"C",true);
	$mypdf -> Cell(21,8,"8th",1,0,"C",true);
	$mypdf -> Cell(21,8,"CGPA",1,1,"C",true);
	$mypdf -> Cell(21,8,$data['1semsresult'],1,0,"C");
	$mypdf -> Cell(21,8,$data['2semsresult'],1,0,"C");
	$mypdf -> Cell(21,8,$data['3semsresult'],1,0,"C");
	$mypdf -> Cell(21,8,$data['4semsresult'],1,0,"C");
	$mypdf -> Cell(21,8,$data['5semsresult'],1,0,"C");
	$mypdf -> Cell(21,8,$data['6semsresult'],1,0,"C");
	$mypdf -> Cell(21,8,$data['7semsresult'],1,0,"C");
	$mypdf -> Cell(21,8,$data['8semsresult'],1,0,"C");
	$mypdf -> Cell(21,8,$data['cgpa'],1,1,"C");


	$mypdf -> Output();
 ?>