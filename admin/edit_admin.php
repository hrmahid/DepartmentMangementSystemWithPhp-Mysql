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
						<li class="nav-item"><a href="dashboard.php" class="nav-link">Dashboard</a></li>
						<li class="nav-item active"><a href="addadmin.php" class="nav-link">Admins</a></li>
						<li class="nav-item"><a href="single_notice.php" class="nav-link">Single Notice</a></li>
						<li class="nav-item"><a href="add_results.php" class="nav-link">Add Results</a></li>
						<li class="nav-item"><a href="add_content.php" class="nav-link">Form Contents</a></li>
						<li class="nav-item"><a href="change_slider.php" class="nav-link">Slider Image</a></li>
						<li class="nav-item"><a href="add_books.php" class="nav-link">Books Library</a></li>
						<li class="nav-item"><a href="add_employes.php" class="nav-link">Employs</a></li>
						<li class="nav-item"><a href="pdf_notices_add.php" class="nav-link">PDF Notices</a></li>
					</ul>
				</nav>
			</div>
			<div class="col-md-10 content">
				<div class="row">
					<div class="col-md-4"></div>
					<div class="col-md-4">
					<?php
						$id = $_GET['xyz'];
						$sql1 = "SELECT * FROM admin WHERE id = '$id'";
						$run1 = mysqli_query($con,$sql1);
						$show = mysqli_fetch_assoc($run1);

					?>
						<div class="well">
						<p style="color:red;" class="bg-info"><b>Update Admin</b></p>
							<label>Admin Full Name</label>
							<input type="text" name="fadmin" class="form-control" value="<?php echo $show['fullname']; ?>" />
							<label>Admin Email</label>
							<input type="text" name="eadmin" class="form-control" value="<?php echo $show['emaila']; ?>" />
							<label>Admin Username</label>
							<input type="text" name="uadmin" class="form-control" value="<?php echo $show['name']; ?>" />
							<label>Admin Password</label>
							<input type="text" name="padmin" class="form-control" value="<?php echo $show['pass']; ?>" />
							<input type="submit" name="update" class="btn btn-success" value="Update" />
						</div>
					</div>
					<div class="col-md-4"></div>
				</div>
				<br />
				<div class="row">
					<div class="col-md-12">
						<div class="std_panel">
						<div class="std_top">
							<p>View Admins</p>
						</div>
							<table class="table table-striped">
								<tr>
									<td>Name</td>
									<td>Email</td>
									<td>Username</td>
									<td>Password</td>
									<td>Edit</td>
									<td>Delete</td>
								</tr>
								<!--PHP-->
								<?php 
									$id = $_SESSION['name'];
										$sql = "SELECT * FROM admin";
										$run = mysqli_query($con, $sql);

										while ($res = mysqli_fetch_assoc($run)) {
											?>
									<tr>
									<td><?php echo $res['fullname']; ?></td>
									<td><?php echo $res['emaila']; ?></td>
									<td><?php echo $res['name']; ?></td>
									<td><?php echo $res['pass']; ?></td>
									<td><a href="edit_admin.php?xzy=<?php echo $id; ?>"><abbr title="Edit"><i class="fa fa-edit"></i></abbr></a></td>
									<td><a href="#"><abbr title="Delete"><i class="fa fa-times"></i></abbr></a></td>
									</tr>
								<?php	}
							

									 ?>	
							</table>
						</div>
					</div>
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