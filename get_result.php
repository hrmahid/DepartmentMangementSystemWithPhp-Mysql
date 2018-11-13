<?php include 'libs/imenu.php'; ?>

	
		<?php 
		if(isset($_POST['getres'])){
			include 'config/dbcon.php';
			
			$roll = $_POST['roll'];
		
			$semster = $_POST['sems'];
			
			$sqlr = "SELECT * FROM justresult WHERE roll = '$roll' AND sems='$semster'";
			$run2 = mysqli_query($con,$sqlr);
			$row = mysqli_fetch_assoc($run2);
			$res = $row['results'];
			
			if($row == 0){
				$result =  "No Result Found For Roll ".$roll;
			}
			if($res == 'Failed'){
				$result =  "Failed in ".$row['refered'];
			}
			if($res == 'Passed'){
				$result = "Congratulation You Have Passed";
			}
			
		}



	 ?>
	 <div class="container-fluid new_header">
		<div style="color:green;"><h3><?php echo @$result; ?></h3></div>
		<div style="color:green;"><h3>Search Your Result</h3></div>
	</div>
	
	<div class="container">
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
			<form action="" method="post">
				<div class="well" style="color: black">
					<table class="table" style="color: black">
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
							<td>Roll</td>
							<td><input type="number" name="roll" class="form-control" required /></td>
						</tr>
						<tr>
							<td></td>
							<td><input type="submit" name="getres" class="btn btn-warning" value="Get Result"></td>
						</tr>
					</table>
				</div>
			</form>
			</div>
			<div class="col-md-4"></div>
		</div>
	</div>


<?php include'libs/footer.php'; ?>	
</body>
</html>
