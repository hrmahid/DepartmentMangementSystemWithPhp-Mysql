<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="../css/form.min.css">
    <link rel="stylesheet" href="../css/form.css">
</head>
<body>
	
</body>
</html>
<?php 
	$con = mysqli_connect('localhost','root','','department');
	
	@$division = $_GET['predivision'];
	@$upzila = $_GET['preupzila'];
	@$perdivision = $_GET['perdivision'];
	@$perupzila = $_GET['perupzila'];
	
	
	if($division!=""){
	$res1 = mysqli_query($con,"Select * from city where div_name = '$division'");
	?>
	<select name="pdist" class="inp" id="citydd" onChange = "change_precity();" style="color:black" required >
			<option>Select</option>
	<?php
	while($row = mysqli_fetch_array($res1)){
		?>
		<option value="<?php echo $row['call_name']; ?>"><?php echo $row['city_name']; ?></option>
		
	<?php 
		}
	?>
	</select>
	<?php
	
	
	}
	if($upzila!=""){
	$res2 = mysqli_query($con,"Select * from upzilah where city_name = '$upzila'");
	?>
	<select name="pol" class="inp" style="color:black" required >
	<option>Select</option>
	<?php
	while($row = mysqli_fetch_array($res2)){
		?>
		<option value="<?php echo $row['up_name']; ?>"><?php echo $row['up_name']; ?></option>
	<?php 
		}
	?>
	</select>
	<?php
	
	}
	//permanent
	if($perdivision!=""){
	$res3 = mysqli_query($con,"Select * from city where div_name = '$perdivision'");
	echo "<select name='perdist' class='inp' id='percitydd' onChange = 'change_percity()' style='color:black' required >";
			echo "<option>Select</option>";
	while($row = mysqli_fetch_array($res3)){
		echo "<option value= '$row[call_name]'>"; echo $row['city_name']; echo"</option>";
	}
	echo "</select>";
	
	
	}
	if($perupzila!=""){
	$res4 = mysqli_query($con,"Select * from upzilah where city_name = '$perupzila'");
	echo "<select name='perps/upzila' class='inp' style='color:black' required >";
	echo "<option>Select</option>";
	while($row = mysqli_fetch_array($res4)){
		echo "<option value= '$row[up_name]'>"; echo $row['up_name']; echo"</option>";
	}
	echo "</select>";
	
	
	}
	
	?>