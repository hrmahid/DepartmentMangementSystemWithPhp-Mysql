<?php
	include '../config/dbcon.php';
	session_start();
	if(isset($_SESSION['name'])){
		
	}
	else{
		header('location: ../login.php');
	}
	
	
	$id = $_GET['id'];
	$sql = "DELETE FROM students WHERE id = '$id'";
	
	if($run = mysqli_query($con,$sql)){
	echo"<script>alert('Student Data Delete Success');
		window.open('dashboard.php','_self');
	</script>";
	
	}
	else{
		echo"<script>alert('Student Data Delete Failed');
		window.open('dashboard.php','_self');
	</script>";
	}



?>