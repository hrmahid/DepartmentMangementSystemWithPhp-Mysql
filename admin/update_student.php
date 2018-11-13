<?php 
session_start();
if(isset($_SESSION['name'])){
	
}
else{
	header('location: ../login.php');
}

?>
<?php include'../config/dbcon.php'; ?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>SPICC | Admin Dashboard</title>
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" href="css/font-awesome.min.css" />
	<link rel="stylesheet" href="css/style.css" />
		<link href="../css/form.min.css" rel="stylesheet" />
	<link href="../css/form.css" rel="stylesheet" />
	
</head>
<body style="background:#e6ecf7">
	<div class="container-fluid topbar">
		<div class="row">
			<div class="col-md-6">
				<h4><i>Admin Dashboard</i></h4>
			</div>
			<div class="col-md-6 an1">
				<a href="../log_out.php" class="btn btn-warning">Log Out</a>
			</div>
		</div>
	</div>

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2">
				<h6>Manage Contents</h6>
				<nav class="navbar navbar-dark bg-dark">
					<ul class="navbar-nav">
						<li class="nav-item active"><a href="dashboard.php" class="nav-link">Dashboard</a></li>
						<li class="nav-item "><a href="addadmin.php" class="nav-link">Admins</a></li>
						<li class="nav-item "><a href="single_notice.php" class="nav-link">Single Notice</a></li>
						<li class="nav-item "><a href="add_results.php" class="nav-link">Add Results</a></li>
						<li class="nav-item "><a href="add_content.php" class="nav-link">Form Contents</a></li>
						<li class="nav-item "><a href="change_slider.php" class="nav-link">Slider Image</a></li>
						<li class="nav-item "><a href="add_books.php" class="nav-link">Books Library</a></li>
						<li class="nav-item "><a href="add_employes.php" class="nav-link">Employs</a></li>
						<li class="nav-item "><a href="pdf_notices_add.php" class="nav-link">PDF Notices</a></li>
					</ul>
				</nav>
			</div>
			<div class="col-md-10 content">
				<h2 style="background-color:#f9ff00;color:#bc5b09;">Update Contents</h2>
				<div class="row">
				<?php 
				
				$id = $_GET['id'];
					$sql = "SELECT * FROM students WHERE id = '$id'"; 
					$run = mysqli_query($con, $sql);
					$row = mysqli_fetch_assoc($run);
				
				include 'update_std_form.php'; 
				
				?>
			</div>
		</div>
	</div>

	
	
	
	
	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="js/popper.min.js"></script>
	<script type="text/javascript" src="js/custom.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
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
				<script>window.open('dashboard.php','_self')</script>
			<?php
		}
		else{
			
			?>
				
				<script>alert('Data UPDATE Failed;');</script>
			<?php

	} 

}
?>
