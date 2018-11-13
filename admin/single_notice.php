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
						<li class="nav-item active"><a href="single_notice.php" class="nav-link">Single Notice</a></li>
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
				<h2 style="background-color:#f9ff00;color:#bc5b09;">Update Notice</h2>
				<div class="dashbox">
					<h3>Present Notice</h3>
					<p><?php 
							
							$sel = "SELECT * FROM single_notice";
							$run = mysqli_query($con,$sel);
							$show = mysqli_fetch_assoc($run);
							echo $show['noticeline'];

					?></p>
					
				</div>
				<div class="well bg-info text-center">
					<form action="" method="post">
						<h4>Update With</h4>
						<textarea name="note" cols="20" rows="5"></textarea><br />
						<input type="submit" name="update" class="btn btn-warning" value="Update" />
						<br /><br /><br /><br />
					</form>
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
	if(isset($_POST['update'])){
		$note = $_POST['note'];
		$sql = "UPDATE single_notice SET noticeline = '$note' WHERE id = 1";
		$run = mysqli_query($con,$sql);
		if($run == true){
			echo "<script>
				alert('Notice UPDATED');
				window.open('single_notice.php','_self');
			</script>";
		}
		else{
			echo "<script>
				alert('Opps Notice UPDATE Failed');
				window.open('single_notice.php','_self');
			</script>";
		}
	}

 ?>
 