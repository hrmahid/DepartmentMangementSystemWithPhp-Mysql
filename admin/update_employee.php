<?php 
session_start();
if(isset($_SESSION['name'])){
	
}
else{
	header('location: ../login.php');
}

?>
<?php include'../config/dbcon.php'; 
	
	$id = $_GET['id'];
	$sql = "SELECT * FROM employes WHERE id = '$id'";
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
					<h3>Update Employe</h3>
					<table class="table table-striped" width="30%">
						<form action="" method="post" enctype="multipart/form-data">
							<tr>
								<td class="text-right">ID NO</td>
								<td><input type="number" name="idno" value="<?php echo $row['realid']; ?>" class="form-control"></td>
							</tr>
							<tr>
								<td class="text-right">Name</td>
								<td><input type="text" name="ename" value="<?php echo $row['name']; ?>" class="form-control" required></td>
							</tr>
							<tr>
								<td class="text-right">Date of Birth</td>
								<td><input type="date" name="dateofb" value="<?php echo $row['dateofb']; ?>" class="form-control" required></td>
							</tr>
							<tr>
								<td class="text-right">Designation</td>
								<td><input type="text" name="degisnat" value="<?php echo $row['desgisnation']; ?>" class="form-control" required></td>
							</tr>
							<tr>
								<td class="text-right">Joining Date</td>
								<td><input type="date" name="joindate" value="<?php echo $row['joindate']; ?>" class="form-control" required></td>
							</tr>
							<tr>
								<td class="text-right">Educational Qualification</td>
								<td><input type="text" name="education" value="<?php echo $row['educationquali']; ?>" class="form-control" required></td>
							</tr>
							<tr>
								<td class="text-right">E-mail</td>
								<td><input type="email" name="email" value="<?php echo $row['email']; ?>" class="form-control" required></td>
							</tr>
							<tr>
								<td class="text-right">Phone</td>
								<td><input type="text" name="phone" value="<?php echo $row['phone']; ?>" class="form-control" required></td>
							</tr>
							<tr>
								<td class="text-right"></td>
								<td><input type="submit" name="sub" class="btn btn-success" value="Update"></td>
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
	if (isset($_POST['sub'])){


			include'../config/dbcon.php';
			$idno = $_POST['idno'];
			$name = $_POST['ename'];
			$dateofb = $_POST['dateofb'];
			$degis = $_POST['degisnat'];
			$joindate = $_POST['joindate'];
			$education = $_POST['education'];
			$email = $_POST['email'];
			$phone = $_POST['phone'];

			$sql6 = "UPDATE employes SET name='$name',realid='$idno',dateofb='$dateofb',desgisnation='$degis',joindate='$joindate',educationquali='$education',email='$email',phone='$phone' WHERE id = '$id'";
			$run = mysqli_query($con,$sql6);
			if($run == true){
				
				echo "<script>alert('Update Success');
						window.open('view_employes.php','_self');
					  </script>";

			}
			else{
				echo "<script>alert('Update Failed');
						window.open('view_employes.php','_self');
					  </script>";
			}

	}


 ?>