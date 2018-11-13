<?php 
session_start();
if(isset($_SESSION['name'])){
	
}
else{
	header('location: ../login.php');
}

?>
<?php include'../config/dbcon.php'; ?>
<?php 
	$sql = "SELECT * FROM employes";
	$run = mysqli_query($con,$sql);
	

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
						<li class="nav-item active"><a href="add_employes.php" class="nav-link">Employs</a></li>
						<li class="nav-item "><a href="pdf_notices_add.php" class="nav-link">PDF Notices</a></li>
					</ul>
				</nav>
			</div>
			<div class="col-md-10 content">
				<h2 style="background-color:#f9ff00;color:#bc5b09;">Employe Management</h2>
				<div class="dashbox text-center">
					<h3>All Employes</h3>
					<table class='table table-striped' border='1'>
						<tr>
							<th>Photo</th>
							<th>Name</th>
							<th>Mobile</th>
							<th>Email</th>
							<th colspan='3'>Action</th>
						</tr>
						<?php
								
								while($row = mysqli_fetch_assoc($run)){
									?>
									<tr>
									<td><img src="../images/employee/<?php echo $row['photo']; ?>" width="60%" height="75%" /></td>
									<td><?php echo $row['name']; ?></td>
									<td><?php echo $row['phone']; ?></td>
									<td><?php echo $row['email']; ?></td>
									<td><a href="view_employee_one.php?id=<?php echo $row['id']; ?>">Details</a></td>
									<td><a href="update_employee.php?id=<?php echo $row['id']; ?>">Edit</a></td>
									<td><a href="delete_employee.php?id=<?php echo $row['id']; ?>">Delete</a></td>
									</tr>
									<?php
								}


						?>
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