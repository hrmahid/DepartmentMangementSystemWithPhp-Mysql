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
						<li class="nav-item active"><a href="add_books.php" class="nav-link">Books Library</a></li>
						<li class="nav-item "><a href="add_employes.php" class="nav-link">Employs</a></li>
						<li class="nav-item "><a href="pdf_notices_add.php" class="nav-link">PDF Notices</a></li>
					</ul>
				</nav>
			</div>
			<div class="col-md-10 content">
				<h2 style="background-color:#f9ff00;color:#bc5b09;">Update Contents</h2>
				<div class="row">
					<div class="col-md-12">
						<div class="dashbox">
							<h4>Add New Book</h4>
						</div>
					</div>
				</div>
				<form action="" method="post" enctype="multipart/form-data">
				<div class="row dashbox">
					<div class="col-md-4"></div>
					<div class="col-md-4">
						<label>Book Name</label>
						<input type="text" name="bname" class="form-control" required="1">
						<label>BOOK</label>
						<input type="file" name="book" class="form-control" required="1">
						<label>Thumbnails</label>
						<input type="file" name="bookthum" class="form-control" required="1">
						<input type="submit" name="addb" class="btn btn-primary" value="Add">
					</div>
					<div class="col-md-4"></div>
				</div>
				</form>
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
	if (isset($_POST['addb'])) {
		$name = $_POST['bname'];
		$book = $_FILES['book']['name'];
		$book_tp = $_FILES['book']['tmp_name'];
		$thumb = $_FILES['bookthum']['name'];
		$thumb_tp = $_FILES['bookthum']['tmp_name'];
		$sql = "INSERT INTO library (name,book,thumb) VALUES ('$name','$book','$thumb')";
		if ($run = mysqli_query($con,$sql)){
			move_uploaded_file($book_tp,'../book_library/'.$book);
			move_uploaded_file($thumb_tp,'../book_library/thumbnails/'.$thumb);

			echo "<script>alert('Book Added');
				window.open('add_books.php','_self');
			</script>";
		}
		else{
			echo " <script>alert('Book Added Failed');
			</script>";
		}
	}


 ?>
