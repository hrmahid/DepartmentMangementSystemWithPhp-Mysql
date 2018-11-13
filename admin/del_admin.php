<?php 

		include '../config/dbcon.php';
		$idd = $_GET['del'];
		$sql = "DELETE FROM admin WHERE id = '$idd'";
		$run = mysqli_query($con, $sql);
		if ($run == true) {
			echo " <script>alert('Admin Deleted');
				window.open('addadmin.php','_self');
			</script>";
		}
		else{
			echo " <script>alert('Admin Delete Failed');
			</script>";
		}
	


 ?>