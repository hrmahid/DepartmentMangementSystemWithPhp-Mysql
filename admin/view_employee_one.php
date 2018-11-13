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

	$id = $_GET['id'];
	$sql = "SELECT * FROM employes WHERE id  = '$id'";
	$run = mysqli_query($con,$sql);
	$row = mysqli_fetch_assoc($run);

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
					<h3>View Employe</h3>
					<table align="center" border='1' class="table">
						<tr>
							<td colspan='2'><h4><?php echo $row['name']?></h4></td>
						</tr>
						<tr>
							<td colspan='2'><img src="../images/employee/<?php echo $row['photo']; ?>" width="160px" height="170px" /></td>
						</tr>
						<tr>
							<th>ID NO</th>
							<td><?php echo $row['realid']?></td>
						</tr>
						<tr>
							<th>Designation</th>
							<td><?php echo $row['desgisnation']?></td>
						</tr>
						<tr>
							<th>Date Of Birth</th>
							<td><?php echo $row['dateofb']?></td>
						</tr>
						<tr>
							<th>Joining Date</th>
							<td><?php echo date($row['joindate'])?></td>
						</tr>
						<tr>
							<th>Educational Qualification</th>
							<td><?php echo $row['educationquali'] ?></td>
						</tr>
						<tr>
							<th>E-mail</th>
							<td><?php echo $row['email'] ?></td>
						</tr>
						<tr>
							<th>Phone</th>
							<td><?php echo $row['phone'] ?></td>
						</tr>
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