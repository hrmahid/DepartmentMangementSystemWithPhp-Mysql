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
						<li class="nav-item active"><a href="change_slider.php" class="nav-link">Slider Image</a></li>
						<li class="nav-item "><a href="add_books.php" class="nav-link">Books Library</a></li>
						<li class="nav-item "><a href="add_employes.php" class="nav-link">Employs</a></li>
						<li class="nav-item "><a href="pdf_notices_add.php" class="nav-link">PDF Notices</a></li>
					</ul>
				</nav>
			</div>
			<div class="col-md-10 content">
				<h2 style="background-color:#f9ff00;color:#bc5b09;">Update Contents</h2>
				<div class="row">
					<div class="col-md-4">
					<form action="change_slider.php" method="post" enctype="multipart/form-data">
					<div class="dashbox" style="height: 260px">
						<label>Add New Slide</label>
						<input type="file" name="image" class="form-control" required="1"><br>
						<input type="submit" name="submit" class="btn btn-primary" value="Add">
					</div>
					</form>
				</div>
				<?php 
					$sql = "SELECT * FROM slider WHERE id ='1'";
					$run = mysqli_query($con,$sql);
					$row = mysqli_fetch_assoc($run);
					if (isset($_POST['up1'])) {
						$img1 = $_FILES['img1']['name'];
						$img1_tp = $_FILES['img1']['tmp_name'];
						$sql1 = "UPDATE slider SET name = '$img1' WHERE id ='1'";
						$run = mysqli_query($con,$sql1);
						if ($run == true) {
							move_uploaded_file($img1_tp,'../images/slider/'.$img1);
							echo "<script>
								alert('Slider 1 Updated');
								window.open('change_slider.php','_self');
								</script>";
						}
						else{
							echo "<script>
								alert('Slider 1 Update Failed');
								</script>";
						}

					}

				 ?>
				<div class="col-md-8">
					<div class="dashbox">
						<p>Slide 1</p>
						<img src="../images/slider/<?php echo $row['name']; ?>" width="100%" height="70px">
						<p>Chnage 1 (Upload To Change)</p>
						<form action="" method="post" enctype="multipart/form-data">
							<input type="file" name="img1" class="form-control"><br>
							<input type="submit" name="up1" value="Update" class="btn btn-danger">
						</form>
					</div>
				</div>
				</div>
				<br>
				<div class="row">
					<div class="col-md-6">
					<div class="dashbox">
						<?php 
							$sql2 = "SELECT * FROM slider WHERE id ='2'";
							$run = mysqli_query($con,$sql2);
							$row = mysqli_fetch_assoc($run);
							if (isset($_POST['up2'])) {
								$img2 = $_FILES['img2']['name'];
								$img2_tp = $_FILES['img2']['tmp_name'];
								$sql3 = "UPDATE slider SET name = '$img2' WHERE id ='2'";
								$run = mysqli_query($con,$sql3);
								if ($run == true) {
									move_uploaded_file($img2_tp,'../images/slider/'.$img2);
									echo "<script>
										alert('Slider 2 Updated');
										window.open('change_slider.php','_self');
										</script>";
								}
								else{
									echo "<script>
										alert('Slider 2 Update Failed');
										</script>";
								}

							}

						 ?>
						<p>Slide 2</p>
						<img src="../images/slider/<?php echo $row['name']; ?>" width="100%" height="70px">
						<p>Chnage 2 (Upload To Change)</p>
						<form action="" method="post" enctype="multipart/form-data">
							<input type="file" name="img2" class="form-control"><br>
							<input type="submit" name="up2" value="Update" class="btn btn-danger">
						</form>
					</div>
				</div>
				<div class="col-md-6">
					<div class="dashbox">
						<?php 
							$sql5 = "SELECT * FROM slider WHERE id ='3'";
							$run = mysqli_query($con,$sql5);
							$row = mysqli_fetch_assoc($run);
							if (isset($_POST['up3'])) {
								$img3 = $_FILES['img3']['name'];
								$img3_tp = $_FILES['img3']['tmp_name'];
								$sql4 = "UPDATE slider SET name = '$img3' WHERE id ='3'";
								$run = mysqli_query($con,$sql4);
								if ($run == true) {
									move_uploaded_file($img3_tp,'../images/slider/'.$img3);
									echo "<script>
										alert('Slider 3 Updated');
										window.open('change_slider.php','_self');
										</script>";
								}
								else{
									echo "<script>
										alert('Slider 3 Update Failed');
										</script>";
								}

							}

						 ?>
						<p>Slide 3</p>
						<img src="../images/slider/<?php echo $row['name']; ?>" width="100%" height="70px">
						<p>Chnage 3 (Upload To Change)</p>
						<form action="" method="post" enctype="multipart/form-data">
							<input type="file" name="img3" class="form-control"><br>
							<input type="submit" name="up3" value="Update" class="btn btn-danger">
						</form>
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
<?php 
	if(isset($_POST['submit'])){
		$img = $_FILES['image']['name'];
		$img_tp = $_FILES['image']['tmp_name'];
		
		$sql = "INSERT INTO slider (name) VALUES ('$img')";
		$run = mysqli_query($con,$sql);
		
		if($run == true){
			move_uploaded_file($img_tp,'../images/slider/'.$img);
				echo "<script>
				alert('Slider Added');
				window.open('change_slider.php','_self');
			</script>";
			
		}
		else{
			echo "<script>
				alert('Failed To Upload');
			</script>";
		}
	}

 ?>
 