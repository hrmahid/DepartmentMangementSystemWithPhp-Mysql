<?php include'config/dbcon.php'; ?>
<?php
if(isset($_SESSION['u_name'])){
		include '../config/dbcon.php';
		$id = $_GET['id'];
		$sql = "SELECT * FROM students WHERE id = '$id'"; 
		$run = mysqli_query($con, $sql);
		$row = mysqli_fetch_assoc($run);
	}
	?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<link rel="stylesheet" href="style.css" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SPI Computer Club</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/jquery.bxslider.css">
	<link rel="stylesheet" type="text/css" href="css/isotope.css" media="screen" />	
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
	<link href="css/prettyPhoto.css" rel="stylesheet" />
	<link href="css/style.css" rel="stylesheet" />	
	<link href="css/form.min.css" rel="stylesheet" />
	<link href="css/form.css" rel="stylesheet" />
 
  </head>
  <body>
	<header>		
		<nav class="navbar navbar-default navbar-static-top" role="navigation">
			<div class="navigation">
				<div class="container">					
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse.collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<div class="navbar-brand">
							<a href="index.php"><h1><span>S</span>PICC</h1></a>
						</div>
					</div>
					
					<div class="navbar-collapse collapse">							
						<div class="menu">
							<ul class="nav nav-tabs" role="tablist">
								<li role="presentation"><a href="index.php" class="active">Home</a></li>
								<li role="presentation"><a href="get_result.php">Results</a></li>
								<li role="presentation"><a href="books_library.php">Books</a></li>
								<li role="presentation"><a href="services.php">Services</a></li>
								<li role="presentation"><?php 
									
									if(isset($_SESSION['u_name'])){
										echo "<a href='../student/my_account.php?id=$id'>My Profile</a>";
									}
									else{
										echo "<a href='contact.php'>Contact</a>";
									}
								
								?></li>	
								<li role="presentation"><?php 
									
									if(isset($_SESSION['u_name'])){
										echo "<a href='log_out.php'>Log Out</a>";
									}
									else{
										echo "<a href='login.php'>Log In</a>";
									}
								
								?></li>								
							</ul>
						</div>
					</div>
	<div class="container-fluid new_header">
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-3"></div>
			<div class="col-md-6">
				<form action="search.php" method="post">
					<input type="text" name="searchf" class="form-control" placeholder="Student / Blood Group / Books" style="width: 250px;float: left;">
					<input type="submit" name="search" class="btn btn-info" value="Search" style="float: left;">
				</form>
			</div>
		</div>
	</div>
				</div>
			</div>	
		</nav>		
	</header>