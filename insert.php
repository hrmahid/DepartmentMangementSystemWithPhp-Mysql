<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<form action="" method="post">
		<label>Education Board Name</label>
		<input type="text" name="edub" />
		<input type="submit" name="submit" />
	</form>
</body>
</html>
<?php 
	
	$con = mysqli_connect('localhost','root','','department');
	if(isset($_POST['submit'])){
		$name = $_POST['edub'];
		$sql = "INSERT INTO education_boards (name) VALUES ('$name')";
		$run = mysqli_query($con, $sql);
		echo "<script>
			alert('Done');
		</script>";
	}
	else{
		echo "<script>
			alert('Try Again!');
		</script>";
	}
	
 ?>
 
 <!---
 
 INSERT INTO students (`name`, `fname`, `mname`, `birthdate`, `personalphone`, `homephone`, `email`, `quota`, `relegion`, `sex`, `presenddist`, `presentcareof`, `prespolice/upzila`, `presentaddrs`, `permadist`, `percareof`, `peraddrs`, `perpolice/upzila`, `psc`, `pscboard`, `pscgrp`, `pscres`, `pscyear`, `jsc`, `jscboard`, `jscgrp`, `jscres`, `jscyear`, `ssc`, `sscboard`, `sscgrp`, `sscres`, `sscyear`, `hsc`, `hscboard`, `hscgrp`, `hscres`, `hscyear`, `predivision`, `semester`, `roll`, `registration`, `shift`, `clggroup`, `sessions`, `bloodgrp`, `1semsresult`, `2semsresult`, `3semsresult`, `4semsresult`, `5semsresult`, `6semsresult`, `7semsresult`, `8semsresult`, `cgpa`, `remarks`, `image`, `std_pass`, `acc_name` VALUES('$std','$fname','$mname','$birthd','$perphn','$hmphn','$email','$quota','$relegion','$sex','$pdist','$pcareof','$paddress','$ppsup','$perdist','$percareof','$peraddress','$perpsup','$psc','$pscboard','$pscgroup','$pscresult','$pscyear','$jsc','$jscboard','$jscgroup','$jscresult','$jscyear','$ssc','$sscboard','$sscgroup','$sscresult','$sscyear','$hsc','$hscboard','$hscgroup','$hscresult','$hscyear','$predivision','$semester','$roll','$reg','$shift','$clggroup','$sess','$blood','$r1','$r2','$r3','$r4','$r5','$r6','$r7','$r8','$total','$image','$usern','$userpass')
 
 
 
 
 presenddist,presentcareof,prespolice/upzila,presentaddrs,permadist,percareof,peraddrs,perpolice/upzila,
 -->
