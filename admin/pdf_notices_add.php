<?php 
session_start();
if(isset($_SESSION['name'])){
	
}

else{
	header('location: ../login.php');
}

?>
<?php include'../config/dbcon.php'; 
	date_default_timezone_set('Asia/Dhaka');
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>SPICC | Admin Dashboard</title>
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" href="css/font-awesome.min.css" />
	<link rel="stylesheet" href="css/style.css" />
	
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
						<li class="nav-item "><a href="dashboard.php" class="nav-link">Dashboard</a></li>
						<li class="nav-item "><a href="addadmin.php" class="nav-link">Admins</a></li>
						<li class="nav-item "><a href="single_notice.php" class="nav-link">Single Notice</a></li>
						<li class="nav-item "><a href="add_results.php" class="nav-link">Add Results</a></li>
						<li class="nav-item "><a href="add_content.php" class="nav-link">Form Contents</a></li>
						<li class="nav-item "><a href="change_slider.php" class="nav-link">Slider Image</a></li>
						<li class="nav-item "><a href="add_books.php" class="nav-link">Books Library</a></li>
						<li class="nav-item "><a href="add_employes.php" class="nav-link">Employs</a></li>
						<li class="nav-item active"><a href="pdf_notices_add.php" class="nav-link">PDF Notices</a></li>
					</ul>
				</nav>
			</div>
			<div class="col-md-10 content">
				<h2 style="background-color:#f9ff00;color:#bc5b09;">PDF Notice Boxs</h2>
				<div class="dashbox text-center">
					<h3>Add New Notice</h3>
					<form action="" method="post" enctype="multipart/form-data">
						<table class="table table-striped" width="30%">
							<form action="" method="post" enctype="multipart/form-data">
							<tr>
								<td class="text-right">Notice Name</td>
								<td><input type="text" name="noticename" class="form-control" required="1"></td>
							</tr>
							<tr>
								<td class="text-right">Upload PDF</td>
								<td><input type="file" name="pdffile" class="form-control" required="1">
								</td>
							</tr>
							<tr>
								<td class="text-right"></td>
								<td><input type="submit" name="submit" class="btn btn-success" value="ADD Notice"></td>
							</tr>
						</form>
						</table>
				</div>
				
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
	if (isset($_POST['submit'])) {
			include'../config/dbcon.php';

			$name = $_POST['noticename'];
	
			$pdfnote = $_FILES['pdffile']['name'];
			$pdfnote_tp = $_FILES['pdffile']['tmp_name'];

			$sql6 = "INSERT INTO pdf_notices (name,pdffile,dateofup) VALUES ('$name','$pdf',NOW())";
			
			if ($run = mysqli_query($con,$sql6)){
				move_uploaded_file($pdfnote_tp,'../pdf_notices/'.$pdfnote);
				echo "<script>alert('Notice Added');
						window.open('pdf_notices_add.php','_self');
					  </script>";

			}
			else{
				echo "<script>alert('Notice Added Failed');
						window.open('pdf_notices_add.php','_self');
					  </script>";
			}

	}


 ?>
			
