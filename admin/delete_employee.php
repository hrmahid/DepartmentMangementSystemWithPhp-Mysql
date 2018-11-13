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
	$sql = "DELETE FROM employes WHERE id = '$id'";
	if($run = mysqli_query($con,$sql)){
		echo "<script>alert('Data DELETED');</script>";
		header('location: view_employes.php');
	}
	else{
		echo "<script>alert('Data DELETE Failed');</script>";
		header('location: view_employes.php');
	}
	
?>
