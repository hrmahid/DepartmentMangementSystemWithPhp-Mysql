<?php 
	
	//if(isset($_POST['submit'])){
		$con = mysqli_connect('localhost','root','','department');
		function test($data){
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}

		$std = test($_POST['name']);
		$fname = test($_POST['fname']);
		$mname = test($_POST['mname']);
		$birthd = $_POST['bdate'];
		$perphn = test($_POST['phnum']);
		$hmphn = test($_POST['hphnum']);
		$email = test($_POST['email']);
		$quota = test($_POST['quota']);
		$relegion = $_POST['relegion'];
		$sex = $_POST['gender'];
		$pdist = $_POST['pdist'];
		$pcareof = test($_POST['pcareof']);
		$paddress = test($_POST['paddress']);
		$prepsup = $_POST['pol'];
		$perdist = $_POST['perdist'];
		$percareof = test($_POST['percareof']);
		$peraddress = test($_POST['peraddress']);
		$perpsup = $_POST['perps/upzila'];
		$bloodgrp = $_POST['bloodgrp'];
		$predivision = $_POST['predivision'];
		$perdivision = $_POST['perdivision'];
		$psc = $_POST['psc'];
		$pscboard = $_POST['pscboard'];
		$pscgroup = $_POST['pscgrp'];
		$pscresult = test($_POST['pscres']);
		$pscyear = test($_POST['pscyear']);
		$jsc = $_POST['jsc'];
		$jscboard = $_POST['jscboard'];
		$jscgroup = $_POST['jscgrp'];
		$jscresult = test($_POST['jscres']);
		$jscyear = test($_POST['jscyear']);
		$ssc = $_POST['ssc'];
		$sscboard = $_POST['sscboard'];
		$sscgroup = test($_POST['sscgrp']);
		$sscresult = test($_POST['sscres']);
		$sscyear = test($_POST['sscyear']);
		$hsc = $_POST['hsc'];
		$hscboard = $_POST['hsc'];
		$hscgroup = $_POST['hscgrp'];
		$hscresult = test($_POST['hscres']);
		$hscyear = test($_POST['hscyear']);
		$semester = test($_POST['sems']);
		$roll = test($_POST['roll']);
		$reg = test($_POST['reg']);
		$shift = $_POST['shift'];
		$clggroup = $_POST['group'];
		$sess = $_POST['sess'];
		$r1 = test($_POST['1st']);
		$r2 = test($_POST['2nd']);
		$r3 = test($_POST['3rd']);
		$r4 = test($_POST['4th']);
		$r5 = test($_POST['5th']);
		$r6 = test($_POST['6th']);
		$r7 = test($_POST['7th']);
		$r8 = test($_POST['8th']);
		$cgpa = test($_POST['cgpa']);
		$usern = test($_POST['useoll']);
		$userpass = test($_POST['usess']);
		$image = $_FILES['image']['name'];
		$image_tp = $_FILES['image']['tmp_name'];
		$total = ($r1*5)/100+($r2*5)/100+($r3*5)/100+($r4*10)/100+($r5*15)/100+($r6*20)/100+($r7*25)/100+($r8*15)/100;
		
		
		$test = mysqli_connect("localhost","root","","test");
		$sqlr = "INSERT INTO students(name,fname,mname,birthdate,personalphone,homephone,email,quota,relegion,sex,presenddist,presentcareof,prespoliceupzila,presentaddrs,permadist,percareof,peraddrs,perpoliceupzila,psc,pscboard,pscgrp,pscres,pscyear,jsc,jscboard,jscgrp,jscres,jscyear,ssc,sscboard,sscgrp,sscres,sscyear,hsc,hscboard,hscgrp,hscres,hscyear,predivision,semester,roll,registration,shift,clggroup,sessions,bloodgrp,1semsresult,2semsresult,3semsresult,4semsresult,5semsresult,6semsresult,7semsresult,8semsresult,cgpa,image,std_pass,acc_name) VALUES ('$std','$fname','$mname','$birthd','$perphn','$hmphn','$email','$quota','$relegion','$sex','$pdist','$pcareof','$prepsup','$paddress','$perdist','$percareof','$peraddress','$perpsup','$psc','$pscboard','$pscgroup','$pscresult','$pscyear','$jsc','$jscboard','$jscgroup','$jscresult','$jscyear','$ssc','$sscboard','$sscgroup','$sscresult','$sscyear','$hsc','$hscboard','$hscgroup','$hscresult','$hscyear','$predivision','$semester','$roll','$reg','$shift','$clggroup','$sess','$bloodgrp','$r1','$r2','$r3','$r4','$r5','$r6','$r7','$r8','$total','$image','$userpass','$usern')";
		$ins = mysqli_query($con,$sqlr);
		if($ins == true){
			move_uploaded_file($image_tp,'images/student_img/'.$image);
			?>
				<script>alert('Data Inserted');
					window.open('login.php','_self')
				</script>
				
			<?php
		}
		else{
			
			?>
				
				<script>alert('Data Inserted Failed;');</script>
			<?php
		}
		
	//}
	

 ?>