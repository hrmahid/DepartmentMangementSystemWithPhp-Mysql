<?php 
session_start();
if(isset($_SESSION['name'])){
	
}
if(isset($_SESSION['enty'])){
	
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
						<li class="nav-item "><a href="single_notice.php" class="nav-link">Single Notice</a></li>
						<li class="nav-item active"><a href="add_results.php" class="nav-link">Add Results</a></li>
						<li class="nav-item "><a href="add_books.php" class="nav-link">Books Library</a></li>
						<li class="nav-item "><a href="pdf_notices_add.php" class="nav-link">PDF Notices</a></li>
					</ul>
				</nav>
			</div>
			<div class="col-md-10 content">
				<h2 style="background-color:#f9ff00;color:#bc5b09;">Update Notice</h2>
				<div class="dashbox text-center">
					<h3>Add Results</h3>
					<form action="" method="post">
						<table class="table table-striped" width="30%">
							<tr>
								<td class="text-right">Session</td>
								<td><select name="sess" class="form-control" required>
									<option>Session</option>
									<?php 
										$sql = "SELECT * FROM dept_sessions";
										$run = mysqli_query($con, $sql);
										while($row = mysqli_fetch_array($run)){
											echo "<option value='$row[sessions]'>$row[sessions]</option>";
										}
									?>
								</select></td>
							</tr>
							<tr>
								<td class="text-right">Group</td>
								<td>
									<select name="group" class="form-control" required >
										<option value="A1">A1</option>
										<option value="B1">B1</option>
										<option value="A2">A2</option>
										<option value="B2">B2</option>
									</select>
								</td>
							</tr>
							<tr>
								<td>Semester</td>
								<td>
									<select name="sems" class="form-control" style="height:35px;" required>
										<option value="1st">1st</option>
										<option value="2nd">2nd</option>
										<option value="3rd">3rd</option>
										<option value="4th">4th</option>
										<option value="5th">5th</option>
										<option value="6th">6th</option>
										<option value="7th">7th</option>
										<option value="8th">8th</option>
									</select>
								</td>
							</tr>
							<tr>
								<td class="text-right">Roll</td>
								<td><input type="number" name="roll" class="form-control" /></td>
							</tr>
							<tr>
								<td class="text-right">Reg</td>
								<td><input type="number" name="reg" class="form-control" /></td>
							</tr>
							<tr>
								<td class="text-right">Result</td>
								<td>
									<select name="res" class="form-control">
										<option value="Passed">Passed</option>
										<option value="Failed">Failed</option>
									</select>
								</td>
							</tr>
							<tr>
								<td>Failed Subject Code</td>
								<td><input type="number" name="ref" class="form-control" /></td>
							</tr>
							<tr>
							<td></td>
								<td><input type="submit" name="insert" class="btn btn-info" value="Insert" /></td>
							</tr>
						</table>
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
	if (isset($_POST['insert'])) {
		$sess = $_POST['sess'];
		$grp = $_POST['group'];
		$roll = $_POST['roll'];
		$reg = $_POST['reg'];
		$res = $_POST['res'];
		$ref = $_POST['ref'];
		$sems = $_POST['sems'];

		$sql = "INSERT INTO justresult(sessions, groups,roll, reg, results,refered,sems) VALUES ('$sess','$grp','$roll','$reg','$res','$ref','$sems')";
		if ($run = mysqli_query($con, $sql)) {
			echo " <script>alert('Result Added');
				window.open('add_results.php','_self');
			</script>";
		}
		else{
			echo " <script>alert('Result Added Failed');
			</script>";
		}
	}


 ?>