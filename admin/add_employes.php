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
					<h3>Add New Employe</h3>
					<a href="view_employes.php" class="btn btn-danger">View Employe</a>
					<table class="table table-striped" width="30%">
						<form action="" method="post" enctype="multipart/form-data">
							<tr>
								<td class="text-right">ID NO</td>
								<td><input type="number" name="idno" class="form-control"></td>
							</tr>
							<tr>
								<td class="text-right">Name</td>
								<td><input type="text" name="ename" class="form-control" required></td>
							</tr>
							<tr>
								<td class="text-right">Date of Birth</td>
								<td><input type="date" name="dateofb" class="form-control" required></td>
							</tr>
							<tr>
								<td class="text-right">Designation</td>
								<td><input type="text" name="degisnat" class="form-control" required></td>
							</tr>
							<tr>
								<td class="text-right">Joining Date</td>
								<td><input type="date" name="joindate" class="form-control" required></td>
							</tr>
							<tr>
								<td class="text-right">Educational Qualification</td>
								<td><input type="text" name="education" class="form-control" required></td>
							</tr>
							<tr>
								<td class="text-right">E-mail</td>
								<td><input type="email" name="email" class="form-control" required></td>
							</tr>
							<tr>
								<td class="text-right">Phone</td>
								<td><input type="text" name="phone" class="form-control" required></td>
							</tr>
							<tr>
								<td class="text-right">Upload Image</td>
								<td><input type="file" name="image" class="form-control" required></td>
							</tr>
							<tr>
								<td class="text-right"></td>
								<td><input type="submit" name="sub" class="btn btn-success" value="ADD Employe"></td>
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
			$image = $_FILES['image']['name'];
			$img_tp = $_FILES['image']['tmp_name'];

			$sql6 = "INSERT INTO employes (name,realid,desgisnation,dateofb,educationquali,joindate,email,phone,photo) VALUES ('$name','$idno','$degis','$dateofb','$education','$joindate','$email','$phone','$image')";
			$run = mysqli_query($con,$sql6);
			if($run == true){
				move_uploaded_file($img_tp,'../images/employee/'.$image);
				echo "<script>alert('Employee Added');
						window.open('add_employes.php','_self');
					  </script>";

			}
			else{
				echo "<script>alert('Employee Added Failed');
						window.open('add_employes.php','_self');
					  </script>";
			}

	}


 ?>
			