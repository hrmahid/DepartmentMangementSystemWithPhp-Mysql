<?php 

	include '../libs/menu.php';  

	if (isset($_POST['search'])){

		function test($data){
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}
		$item = test($_POST['searchf']);
		include '../config/dbcon.php';
		$sql = "SELECT * FROM students WHERE name LIKE '%$item%' OR roll Like '%$item%' OR registration LIKE '%$item%' OR bloodgrp LIKE '%$item%'";
		$run = mysqli_query($con, $sql);
		$count=0;
		if (mysqli_num_rows($run)<1){
			?>
				<div class="well"><h2>No Result Found For <a href="#"><?php echo $item; ?></a></h2></div>
			<?php
		}
		else{

			?>
			 <table class="table table-striped">
			 	<tr>
			 		<td>No</td>
			 		<td>Name</td>
			 		<td>Roll</td>
			 		<td>Reg</td>
			 		<td>Group</td>
			 		<td>Shift</td>
			 		<td>Blood</td>
			 		<td>Phone</td>
			 	</tr>
			<?php
			$count++;
			while($data=mysqli_fetch_assoc($run)){
				?>
				<tr>
			 		<td><?php echo $count; ?></td>
			 		<td><?php echo $data['name']; ?></td>
			 		<td><?php echo $data['roll']; ?></td>
			 		<td><?php echo $data['registration']; ?></td>
			 		<td><?php echo $data['clggroup']; ?></td>
			 		<td><?php echo $data['shift']; ?></td>
			 		<td><?php echo $data['bloodgrp']; ?></td>
			 		<?php if($data['sex'] == "Male"){
			 			echo "<td>$data[personalphone]</td>";
			 		}
			 		else{
			 			echo "<td>Private</td>";
			 		}
			 		 ?>
			 		}
		 		</tr>

				<?php
			}
		}
	}
 ?>
 </table>
 <?php include '../libs/footer.php'; ?>