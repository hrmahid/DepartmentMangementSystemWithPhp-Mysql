<?php $con = mysqli_connect('localhost','root','','department'); ?>
<?php 
	session_start();
	if(isset($_SESSION['u_name'])){
		include '../config/dbcon.php';
		$id = $_GET['id'];
		$sql = "SELECT * FROM students WHERE id = '$id'"; 
		$run = mysqli_query($con, $sql);
		$row = mysqli_fetch_assoc($run);
	}
	else{
		echo "<script>window.open('../login.php','_self');</script>";
	}
	

 ?>
<?php include '../libs/menu.php'; ?>
 <div >  
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6 offset-md-3 text-center">
				<h3>Update Student Information Form</h3>
				<h4>Computer Technology</h4>
			</div>
		</div>
	</div>
	<div class="container bg-dark rad">
		<div class="row">
			<div class="col-md-12 text-center">
				<p style="color:white;font-size:20px;">Personal Information</p>
			</div>
		</div>
<form action="" method="post" enctype="multipart/form-data">
		<div class="row">
			<div class="col-md-4">
				<label>Student Name:</label><br />
				<input type="text" name="name" class="form-control" value="<?php echo $row['name'];  ?>" required />
			</div>
			<div class="col-md-4">
				<label style="color:white;">Father's Name:</label><br />
				<input type="text" name="fname" class="form-control" value="<?php echo $row['fname'];?>" required />
			</div>
			<div class="col-md-4">
				<label style="color:white;">Mother's Name:</label><br />
				<input type="text" name="mname" class="form-control" value="<?php echo $row['mname'];?>" required />
			</div>
		</div>
		<br />
		<div class="row">
			<div class="col-md-4 inp">
				<p>Date Of Birth<p>
				<input type="date" name="bdate" class="form-control" value="<?php echo $row['birthdate']; ?>" required />
			</div>
			<div class="col-md-4 inp">
				<p>Religion<p>
				<select name="relegion" required >
					<option value="<?php echo $row['relegion']; ?>"><?php echo $row['relegion']; ?></option>
					<option value="Islam">Islam</option>
					<option value="Hindu">Hindu</option>
					<option value="Buddo">Buddo</option>
					<option value="Christan">Christan</option>
				</select>
			</div>
			<div class="col-md-4 inp">
				<p>Blood Group</p>
				<select name="bloodgrp" required >
					<option value="<?php echo $row['bloodgrp']; ?>"><?php echo $row['bloodgrp']; ?></option>
					<option value="A+">A+</option>
					<option value="AB+">AB+</option>
					<option value="A-">A-</option>
					<option value="AB-">AB-</option>
					<option value="B+">B+</option>
					<option value="B-">B-</option>
					<option value="O+">O+</option>
					<option value="O-">O-</option>
				</select>
			</div>
		</div>
		<br />
		<div class="row">
			<div class="col-md-4 inp">
				<label>Gender</label>
				<select name="gender" required >
					<option value="<?php echo $row['sex']; ?>"><?php echo $row['sex']; ?></option>
					<option value="Male">Male</option>
					<option value="Female">Female</option>
					<option value="Others">Others</option>
				</select>
			</div>
			<div class="col-md-4 inp">
				<label>Quota</label>
				<select name="quota" required >
					<option value="<?php echo $row['quota']; ?>"><?php echo $row['quota']; ?></option>
					<option value="Merit">Merit</option>
					<option value="Handicraft">Handicraft</option>
					<option value="Fredom Fighters">Fredom Fighters</option>
				</select>
			</div>
			<div class="col-md-4 inp">
				<label>E-mail</label>
				<input type="text" name="email" class="form-control" value="<?php echo $row['email'];?>" required />
			</div>
		</div>
		<br />
		<div class="row">
			<div class="col-md-6">
				<label>Contact Phone</label>
				<input type="text" name="phnum" class="form-control" value="<?php echo $row['personalphone'];?>" required />
			</div>
			<div class="col-md-6">
				<label>Guardian Phone</label>
				<input type="text" name="hphnum" class="form-control" value="<?php echo $row['homephone'];?>" required />
			</div>
		</div>
		<br />
		<div class="row">
			<div class="col-md-12 text-center">
				<h3 style="color:#fff">Address</h3>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<label>Mailing Address/ Present Address</label><br />
				<div class="row">
					<div class="col-md-12">
						<label>Care of</label>
						<input type="text" name="pcareof" class="form-control" value="<?php echo $row['presentcareof'];?>" required />
					</div>
				</div><br />
				<div class="row">
					<div class="col-md-12">
						<label>Village /Town /Road:</label>
						<input type="text" name="paddress" class="form-control" value="<?php echo $row['presentaddrs'];?>" required />
					</div>
				</div><br />
				<div class="row">
					<div class="col-md-4 inp">
						<label>Division</label>
						<select name="predivision" required >
							<option value="<?php echo $row['predivision'];?>"><?php echo $row['predivision'];?></option>
						</select>
					</div>
					<div class="col-md-4 inp">
					<label>District</label>
						<select name="pdist"  id="">
							<option value="<?php echo $row['presenddist']; ?>"><?php echo $row['presenddist']; ?></option>
						</select>
					</div>
					<div class="col-md-4 inp">
					<label>PS/Upzila</label>
						<select name="pol" id=""  >
							<option value="<?php echo $row['prespoliceupzila']; ?>"><?php echo $row['prespoliceupzila']; ?></option>
						</select>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<label>Permanent Address</label>
				<div class="row">
					<div class="col-md-12">
						<label>Care of</label>
						<input type="text" name="percareof" class="form-control" value="<?php echo $row['percareof']; ?>" required />
					</div>
				</div><br />
				<div class="row">
					<div class="col-md-12">
						<label>Village /Town /Road:</label>
						<input type="text" name="peraddress" class="form-control" value="<?php echo $row['peraddrs']; ?>" required />
					</div>
				</div><br />
				<div class="row">
					<div class="col-md-4 inp">
						<label>Division</label>
						<select name="perdivision" required >
							<option value="<?php echo $row['perdivision']; ?>"><?php echo $row['perdivision']; ?></option>
						</select>
					</div>
					<div class="col-md-4 inp">
						<label>District</label>
						<select name="perdist"  >
							<option value="<?php echo $row['permadist']; ?>"><?php echo $row['permadist']; ?></option>
						</select>
					</div>
					<div class="col-md-4 inp">
						<label>PS/Upzila</label>
						<select name="perps/upzila"  >
							<option value="<?php echo $row['perpoliceupzila']; ?>"><?php echo $row['perpoliceupzila']; ?></option>
						</select>
					</div>
				</div>
			</div>
		</div>
		<br />
		<div class="row">
			<div class="col-md-12 text-center">
				<h3 style="color:#fff">Educational Qualification</h3>
			</div>
		</div>
		<br />
		<div class="row">
			<div class="col-md-12">
				<table class="table inp" width="50%">
					<tr>
						<td>Exam Name</td>
						<td>Board</td>
						<td>Group/Subject</td>
						<td>Result</td>
						<td>Year</td>
					</tr>
				</table>
			</div>
		</div>
		<div class="row">
			<div class="col-md-2 inp">
				<select name="psc" id="">
					<option value="<?php echo $row['psc']; ?>"><?php echo $row['psc']; ?></option>
				</select>
			</div>
			<div class="col-md-2"></div>
			<div class="col-md-2 inp">
				<select name="pscboard" id="">
					<option value="<?php echo $row['pscboard']; ?>"><?php echo $row['pscboard']; ?></option>
				</select>
			</div>
			<div class="col-md-2 inp">
				<select name="pscgrp">
					<option value="<?php echo $row['pscgrp']; ?>"><?php echo $row['pscgrp']; ?></option>
					<option value="General">General</option>
					<option value="Madrasah">Madrasah</option>
					<option value="Vocational">Vocational</option>
				</select>
			</div>
			<div class="col-md-2">
				<input type="text" name="pscres" class="form-control" value="<?php echo $row['pscres']; ?>" />
			</div>
			<div class="col-md-2">
				<input type="text" name="pscyear" class="form-control" value="<?php echo $row['pscyear']; ?>" />
			</div>
		</div><br />
		<div class="row">
			<div class="col-md-2 inp">
				<select name="jsc" id="" required />
					<option value="<?php echo $row['jsc']; ?>"><?php echo $row['jsc']; ?></option>
				</select>
			</div>
			<div class="col-md-2"></div>
			<div class="col-md-2 inp">
				<select name="jscboard" id="" required >
					<option value="<?php echo $row['jscboard']; ?>"><?php echo $row['jscboard']; ?></option>
				</select>
			</div>
			<div class="col-md-2 inp">
				<select name="jscgrp" id="" required >
					<option value="<?php echo $row['jscgrp']; ?>"><?php echo $row['jscgrp']; ?></option>
					<option value="General">General</option>
					<option value="Madrasah">Madrasah</option>
					<option value="Vocational">Vocational</option>
				</select>
			</div>
			<div class="col-md-2">
				<input type="text" name="jscres" class="form-control" value="<?php echo $row['jscres']; ?>" required />
			</div>
			<div class="col-md-2">
				<input type="text" name="jscyear" class="form-control" value="<?php echo $row['jscyear']; ?>" required />
			</div>
		</div><br />
		<div class="row">
			<div class="col-md-2 inp">
				<select name="ssc" id="" required />
					<option value="<?php echo $row['ssc']; ?>"><?php echo $row['ssc']; ?></option>
					<option value="SSC">SSC</option>
					<option value="SSC Voc">SSC Vocational</option>
					<option value="SSC Dakil">SSC Dakhil</option>
				</select>
			</div>
			<div class="col-md-2"></div>
			<div class="col-md-2 inp">
				<select name="sscboard" id="" required >
					<option value="<?php echo $row['sscboard']; ?>"><?php echo $row['sscboard']; ?></option>
				</select>
			</div>
			<div class="col-md-2 inp">
				<select name="sscgrp" id="" required >
					<option value="<?php echo $row['sscgrp']; ?>"><?php echo $row['sscgrp']; ?></option>
					<option value="Scince">Scince</option>
					<option value="Arts">Art's</option>
					<option value="Commerce">Commerce</option>
					<option value="SSC Dakhil">SSC Dakhil</option>
				</select>
			</div>
			<div class="col-md-2">
				<input type="text" name="sscres" class="form-control" value="<?php echo $row['sscres']; ?>" required />
			</div>
			<div class="col-md-2">
				<input type="text" name="sscyear" class="form-control" value="<?php echo $row['sscyear']; ?>" required />
			</div>
		</div><br />
		<!--HSC-->
		<div class="row">
			<div class="col-md-2 inp">
				<select name="hsc" id="" />
					<option value="<?php echo $row['hsc']; ?>"><?php echo $row['hsc']; ?></option>
					<option>Optional</option>
					<option value="HSC">HSC</option>
				</select>
			</div>
			<div class="col-md-2"></div>
			<div class="col-md-2 inp">
				<select name="hscboard" id="">
					<option value="<?php echo $row['hscboard']; ?>"><?php echo $row['hscboard']; ?></option>
				</select>
			</div>
			<div class="col-md-2 inp">
				<select name="hscgrp" id="">
					<option value="<?php echo $row['hscgrp']; ?>"><?php echo $row['hscgrp']; ?></option>
				</select>
			</div>
			<div class="col-md-2">
				<input type="text" name="hscres" class="form-control" value="<?php echo $row['hscres']; ?>" />
			</div>
			<div class="col-md-2">
				<input type="text" name="hscyear" class="form-control" value="<?php echo $row['hscyear']; ?>" />
			</div>
		</div><br />
		<div class="row">
			<div class="col-md-12 text-center">
				<h3 style="color:#fff">Present Education Status</h3>
			</div>
		</div>
		<div class="row">
			<div class="col-md-2 inp">
				<label>Semester</label>
				<select name="sems">
					<option value="<?php echo $row['semester']; ?>"><?php echo $row['semester']; ?></option>
					<option value="1st">1st</option>
					<option value="2nd">2nd</option>
					<option value="3rd">3rd</option>
					<option value="4th">4th</option>
					<option value="5th">5th</option>
					<option value="6th">6th</option>
					<option value="7th">7th</option>
					<option value="8th">8th</option>
				</select>
			</div>
			<div class="col-md-2 inp">
				<label>Shift</label>
				<select name="shift" id="" required >
					<option value="<?php echo $row['shift']; ?>"><?php echo $row['shift']; ?></option>
					<option value="1st">1st</option>
					<option value="2nd">2nd</option>
				</select>
			</div>
			<div class="col-md-2 inp">
				<label>Session</label>
				<select name="sess">
					<option value="<?php echo $row['sessions']; ?>"><?php echo $row['sessions']; ?></option>
				</select>
			</div>
			<div class="col-md-2">
				<label>Roll</label>
				<input type="text" name="roll" class="form-control" value="<?php echo $row['roll']; ?>" />
			</div>
			<div class="col-md-2">
				<label>Registration</label>
				<input type="text" name="reg" class="form-control" value="<?php echo $row['registration']; ?>" required />
			</div>
			<div class="col-md-2 inp">
				<label>Group</label>
				<select name="group">
					<option value="<?php echo $row['clggroup']; ?>"><?php echo $row['clggroup']; ?></option>
					<option value="A1">A1</option>
					<option value="B1">B1</option>
					<option value="A2">A2</option>
					<option value="B2">B2</option>
				</select>
			</div>
		</div>
		<br />
		<div class="row">
			<div class="col-md-12 text-center">
				<h3 style="color:#fff">Semester Wise GPA</h3>
			</div>
		</div>
		<div class="row">
			<div class="col-md-1">
				<label>1st</label>
				<input type="text" name="1st" value="<?php echo $row['1semsresult']; ?>" class="form-control"  />
			</div>
			<div class="col-md-1">
				<label>2nd</label>
				<input type="text" name="2nd" value="<?php echo $row['2semsresult']; ?>" class="form-control"  />
			</div>
			<div class="col-md-1">
				<label>3rd</label>
				<input type="text" name="3rd" value="<?php echo $row['3semsresult']; ?>" class="form-control"  />
			</div>
			<div class="col-md-1">
				<label>4th</label>
				<input type="text" name="4th" value="<?php echo $row['4semsresult']; ?>" class="form-control"  />
			</div>
			<div class="col-md-1">
				<label>5th</label>
				<input type="text" name="5th" value="<?php echo $row['5semsresult']; ?>" class="form-control"  />
			</div>
			<div class="col-md-1">
				<label>6th</label>
				<input type="text" name="6th" value="<?php echo $row['6semsresult']; ?>" class="form-control"  />
			</div>
			<div class="col-md-1">
				<label>7th</label>
				<input type="text" name="7th" value="<?php echo $row['7semsresult']; ?>" class="form-control"  />
			</div>
			<div class="col-md-1">
				<label>8th</label>
				<input type="text" name="8th" value="<?php echo $row['8semsresult']; ?>" class="form-control"  />
			</div>
			<div class="col-md-2">
				<label>CGPA(Optional)</label>
				<input type="text" name="cgpa" class="form-control" value="<?php echo $row['cgpa']; ?>"/>
			</div>
		</div>
		<br />
		<div class="row">
			<div class="col-md-12 text-center">
				<h3 style="color:#fff">Student Photo</h3>
			</div>
		</div>
		<br />
		<div class="row">
			<div class="col-md-6 inp">
				<label>Roll Number</label>
				<input type="text" name="useoll" class="form-control" value="<?php echo $row['acc_name']; ?>" required />
			</div>
			<div class="col-md-6 inp">
				<label>Set A Password</label>
				<input type="text" name="usess" class="form-control" value="<?php echo $row['std_pass']; ?>" required />
			</div>
		</div><br />
		<div class="row">
			<div class="col-md-6">
				<input type="submit" name="submit" value="Update" class="btn btn-primary btn-block"  />
			</div>
			<div class="col-md-6">
				<input type="reset" name="reset" value="Clear All" class="btn btn-danger btn-block"  />
			</div>
		</div>
		<br />
	</div>
</form>
</div>

   

	<?php include '../libs/footeri.php' ?>
   
	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->	
    <script src="js/jquery-2.1.1.min.js"></script>	
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/fancybox/jquery.fancybox.pack.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/jquery.bxslider.min.js"></script>
	<script src="js/jquery.prettyPhoto.js"></script>
	<script src="js/jquery.isotope.min.js"></script> 
	<script src="js/functions.js"></script>
	<script>
	wow = new WOW(
	 {
	
		}	) 
		.init();
	</script>
	<script type="text/javascript">
	function change_predivision(){
		var xmlhttp = new XMLHttpRequest();
		xmlhttp.open("GET","../libs/ajax_update.php?predivision=" +document.getElementById("divisiondd").value,false);
		xmlhttp.send(null);
		document.getElementById("city").innerHTML=xmlhttp.responseText;
	}
	function change_precity(){
		var xmlhttp = new XMLHttpRequest();
		xmlhttp.open("GET","../libs/ajax_update.php?preupzila=" +document.getElementById("citydd").value,false);
		xmlhttp.send(null);
		document.getElementById("upzila").innerHTML=xmlhttp.responseText;
	}
	
	function change_perdivision(){
		var xmlhttp = new XMLHttpRequest();
		xmlhttp.open("GET","../libs/ajax_update.php?perdivision=" +document.getElementById("perdivisiondd").value,false);
		xmlhttp.send(null);
		document.getElementById("percity").innerHTML=xmlhttp.responseText;
	}
	function change_percity(){
		var xmlhttp = new XMLHttpRequest();
		xmlhttp.open("GET","../libs/ajax_update.php?perupzila=" +document.getElementById("percitydd").value,false);
		xmlhttp.send(null);
		document.getElementById("perupzila").innerHTML=xmlhttp.responseText;
	}
</script>
	
  </body>
</html>
<?php 

	if (isset($_POST['submit'])){
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
		$total = ($r1*5)/100+($r2*5)/100+($r3*5)/100+($r4*10)/100+($r5*15)/100+($r6*20)/100+($r7*25)/100+($r8*15)/100;



		$sql ="UPDATE students SET name ='$std',fname='$fname',mname='$mname',birthdate='$birthd',personalphone='$perphn',homephone='$hmphn',email='$email',quota='$quota',relegion='$relegion',sex='$sex',presenddist='$pdist',presentcareof='$pcareof',prespoliceupzila='$prepsup',presentaddrs='$paddress',permadist='$perdist',percareof='$percareof',peraddrs='$peraddress',perpoliceupzila='$perpsup',psc='$psc',pscboard='$pscboard',pscgrp='$pscgroup',pscres='$pscresult',pscyear='$pscyear',jsc='$jsc',jscboard='$jscboard',jscgrp='$jscgroup',jscres='$jscresult',jscyear='$jscyear',ssc='$ssc',sscboard='$sscboard',sscgrp='$sscgroup',sscres='$sscresult',sscyear='$sscyear',hsc='$hsc',hscboard='$hscboard',hscgrp='$hscgroup',hscres='$hscresult',hscyear='$hscyear',predivision='$predivision',perdivision='$perdivision',semester='$semester',roll='$roll',registration='$reg',shift='$shift',clggroup='$clggroup',sessions='$sess',bloodgrp='$bloodgrp',1semsresult='$r1',2semsresult='$r2',3semsresult='$r3',4semsresult='$r4',5semsresult='$r5',6semsresult='$r6',7semsresult='$r7',8semsresult='$r8',cgpa='$total',std_pass='$userpass',acc_name ='$usern' WHERE id = '$id'";

		$ins = mysqli_query($con,$sql);
		if($ins == true){
			?>
				<script>alert('Data Upadate Successfully!!!')</script>
				<script>window.open('my_account.php?id=<?php echo $id ?>','_self')</script>
			<?php
		}
		else{
			
			?>
				
				<script>alert('Data UPDATE Failed;');</script>
			<?php

	} 

}
?>