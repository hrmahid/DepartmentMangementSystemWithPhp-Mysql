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
						<li class="nav-item active"><a href="dashboard.php" class="nav-link">Dashboard</a></li>
						<li class="nav-item "><a href="addadmin.php" class="nav-link">Admins</a></li>
						<li class="nav-item "><a href="single_notice.php" class="nav-link">Single Notice</a></li>
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
				<div class="row">
					<div class="col-md-4">
						<div class="dashbox">
							<img src="img/student_logo.png" height="50px" width="50px" />
							<p>Total Student&nbsp: <?php 
								$sql = "SELECT * FROM students";
								$qry = mysqli_query($con, $sql);
								$count = mysqli_num_rows($qry);
								echo $count;

							 ?> </p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="dashbox">
							<img src="img/teachers_logo.png" height="50px" width="50px" />
							<p>Total Employ&nbsp:
								<?php 
								$sql24 = "SELECT * FROM employes";
								$qry24 = mysqli_query($con, $sql24);
								$count = mysqli_num_rows($qry24);
								echo $count;

							 ?>
							 </p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="dashbox">
							<img src="img/teachers_logo.png" height="50px" width="50px" />
							<p>Admins&nbsp: <?php 
								$sql2 = "SELECT * FROM admin";
								$qry2 = mysqli_query($con, $sql2);
								$count = mysqli_num_rows($qry2);
								echo $count;

							 ?>
							 </p>
						</div>
					</div>
				</div>
				<br />
				<div class="row">
					<div class="col-md-12">
						<div class="std_panel">
						<div class="std_top">
							<p>View Students</p>
						</div>
							<table class="table table-striped">
								<form action="" method="post">
									<tr>
									<td>
										<select name="session" class="form-control">
											<option>Select Session</option>
											<?php 

												$sql = "SELECT * From dept_sessions";
												$run = mysqli_query($con,$sql);
												while ($row = mysqli_fetch_assoc($run)) {
													echo "<option value='$row[sessions]'>$row[sessions]</option>";
												}

											 ?>
										</select>
									</td>
									<td>
										<select name="shift" class="form-control">
											<option>Select Shift</option>
											<option value="1st">1st</option>
											<option value="2nd">2nd</option>
										</select>
									</td>
									<td>
										<select name="grp" class="form-control">
											<option>Select Group</option>
											<option value="A1">A1</option>
											<option value="B1">B1</option>
											<option value="A2">A2</option>
											<option value="B2">B2</option>
										</select>
									</td>
										<td colspan="5"> 
											<button name="search" class="btn btn-info">Search</button>
										</td>
									</tr>
								</form>
								<!--Form-->
								<tr>
									<td>Name</td>
									<td>Roll</td>
									<td>Reg</td>
									<td>Grp</td>
									<td>Sess</td>
									<td>E</td>
									<td>D</td>
									<td>v</td>
								</tr>
								<!--PHP-->
								<?php 
									if (isset($_POST['search'])){


										$sess = $_POST['session'];
										$shift = $_POST['shift'];
										$grp = $_POST['grp'];




									//main coding	

										$sql = "SELECT * FROM students WHERE sessions ='$sess' AND shift ='$shift' AND clggroup ='$grp'";
										$runn = mysqli_query($con, $sql);

									while ($res = mysqli_fetch_assoc($runn)) {
											
											?>
									<tr>
									<td><?php echo $res['name']; ?></td>
									<td><?php echo $res['roll']; ?></td>
									<td><?php echo $res['registration']; ?></td>
									<td><?php echo $res['clggroup']; ?></td>
									<td><?php echo $res['sessions']; ?></td>
									<td><a href="update_student.php?id=<?php echo $res['id']; ?>"><abbr title="Edit"><i class="fa fa-edit"></i></abbr></a></td>
									<td><a href="view_as_pdf.php?id=<?php echo $res['id']; ?>"><abbr title="View"><i class="fa fa-html5"></i></abbr></a></td>
									<td><a href="delete_student.php?id=<?php echo $res['id']; ?>"><abbr title="Delete"><i class="fa fa-times"></i></abbr></a></td>
									</tr>
									
								<?php	}
							}
							
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