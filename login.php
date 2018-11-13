<?php include 'config/dbcon.php'; ?>
 <?php include 'libs/imenu.php'; ?>
	<div class="container-fluid new_header">
		<div style="color:green;"><h3> Are You Student?</span><span style="color:green;"><a href="student_registration.php"> Registration</a></a></h3></div>
	</div>
	

	<div class="container">
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
			<form action="" method="post">
				<div class="well">
					<label style="color:black">User Roll</label>
					<input type="text" name="u_name" class="form-control" /><br />
					<label style="color:black">User PassWord</label>
					<input type="password" name="u_pass" class="form-control" />
					<a href="student_registration.php" style="float:right">New ? Register Here</a><br />
					<input type="submit" name="login" class="btn btn-primary" value="Log In" />
				</div>
			</form>
			</div>
			<div class="col-md-4"></div>
		</div>
	</div>
</body>
</html>
<?php 
	if(isset($_POST['login'])){
		$user = $_POST['u_name'];
		$userp = $_POST['u_pass'];
		$sql = "SELECT*FROM students WHERE acc_name ='$user' AND std_pass ='$userp'";
		$run = mysqli_query($con,$sql);
		$row = mysqli_fetch_array($run);
		$id = $row['id'];
		$check = mysqli_num_rows($run);
		if($check == 0){
			$sql = "SELECT*FROM admin WHERE name='$user' AND pass ='$userp'";
			$run = mysqli_query($con,$sql);
			$check = mysqli_num_rows($run);
			if($check == 0){
				
				echo "<script>alert('UserName or PassWord Don't Matched!!!');</script>";
				
			}
		else{
			session_start();
				$_SESSION['name'] = $user;
				echo "<script>alert('You Are Now Login');</script>";
				header('location:admin/dashboard.php');

		}
		}
		else{
			session_start();
			$_SESSION['u_name'] = $user;
			//header('location:student/my_account.php?id=$id');
			echo "<script>window.open('student/my_account.php?id=$id','_self');</script>";
		}
	
	}


 include 'libs/footer.php';

 ?>