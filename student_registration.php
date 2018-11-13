<?php 

	$con = mysqli_connect('localhost','root','','department'); 
	include 'libs/imenu.php';
?>

   
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6 offset-md-3 text-center">
				<h3>Student Information Form</h3>
				<h4>Computer Technology</h4>
			</div>
		</div>
	</div>
	<div class="container bg-dark rad">
		<div class="row">
			<div class="col-md-6">
				<p style="color:white;font-size:20px;">Personal Information</p>
			</div>
		</div>
<form action="register_process.php" method="post" enctype="multipart/form-data">
		<div class="row">
			<div class="col-md-4">
				<label>Student Name:</label><br />
				<input type="text" name="name" class="form-control" placeholder="Enter Your Name" required />
			</div>
			<div class="col-md-4">
				<label style="color:white;">Father's Name:</label><br />
				<input type="text" name="fname" class="form-control" placeholder="Enter Your Father Name" required />
			</div>
			<div class="col-md-4">
				<label style="color:white;">Mother's Name:</label><br />
				<input type="text" name="mname" class="form-control" placeholder="Enter Your Mother Name" required />
			</div>
		</div>
		<br />
		<div class="row">
			<div class="col-md-4 inp">
				<p>Date Of Birth<p>
				<input type="date" name="bdate" class="form-control" required />
			</div>
			<div class="col-md-4 inp">
				<p>Religion<p>
				<select name="relegion" required >
					<option value="Islam">Islam</option>
					<option value="Hindu">Hindu</option>
					<option value="Buddo">Buddo</option>
					<option value="Christan">Christan</option>
				</select>
			</div>
			<div class="col-md-4 inp">
				<p>Blood Group</p>
				<select name="bloodgrp" required >
					<option value="A+">A+</option>
					<option value="AB+">AB+</option>
					<option value="A-">A-</option>
					<option value="AB-">AB-</option>
					<option value="B+">B+</option>
					<option value="B-">B-</option>
					<option value="O+">O+</option>
					<option value="O-">O-</option>
				</select>
			</div>
		</div>
		<br />
		<div class="row">
			<div class="col-md-4 inp">
				<label>Gender</label>
				<select name="gender" required >
					<option value="Male">Male</option>
					<option value="Female">Female</option>
					<option value="Others">Others</option>
				</select>
			</div>
			<div class="col-md-4 inp">
				<label>Quota</label>
				<select name="quota" required >
					<option value="Merit">Merit</option>
					<option value="Handicraft">Handicraft</option>
					<option value="Fredom Fighters">Fredom Fighters</option>
				</select>
			</div>
			<div class="col-md-4 inp">
				<label>E-mail</label>
				<input type="text" name="email" class="form-control" placeholder="examp.&nbsp spi@gmail.com" required />
			</div>
		</div>
		<br />
		<div class="row">
			<div class="col-md-6">
				<label>Contact Phone</label>
				<input type="number" name="phnum" class="form-control" placeholder="01784-443284" required />
			</div>
			<div class="col-md-6">
				<label>Guardian Phone</label>
				<input type="number" name="hphnum" class="form-control" placeholder="01784-443284" required />
			</div>
		</div>
		<br />
		<div class="row">
			<div class="col-md-12 text-center">
				<h3 style="color:#fff">Address</h3>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<label>Mailing Address/ Present Address</label><br />
				<div class="row">
					<div class="col-md-12">
						<label>Care of</label>
						<input type="text" name="pcareof" class="form-control" placeholder="ex. Father" required />
					</div>
				</div><br />
				<div class="row">
					<div class="col-md-12">
						<label>Village /Town /Road:</label>
						<input type="text" name="paddress" class="form-control" placeholder="1/2 Technical Road,Boroikandi" required />
					</div>
				</div><br />
				<div class="row">
					<div class="col-md-4 inp">
						<label>Division</label>
						<select name="predivision" id="divisiondd" onChange="change_predivision()" required >
							<option value="">Select Division</option>
							<?php 
								
								$run = mysqli_query($con,"SELECT * FROM divisions");
								while($row = mysqli_fetch_array($run)){
							?>
							<option value="<?php echo $row['call_name']; ?>"><?php echo $row['div_name']; ?></option>
							<?php
								}

							?>
						</select>
					</div>
					<div class="col-md-4 inp">
					<label>District</label>
						<div id="city">
							<select name=""  id="" >
								<option value="">Select District</option>
							</select>
						</div>
					</div>
					<div class="col-md-4 inp">
					<label>PS/Upzila</label>
						<div id="upzila">
							<select name="" id=""  >
								<option value="">Select PS/Upzila</option>
							</select>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<label>Permanent Address</label>
				<div class="row">
					<div class="col-md-12">
						<label>Care of</label>
						<input type="text" name="percareof" class="form-control" placeholder="ex. Father" required />
					</div>
				</div><br />
				<div class="row">
					<div class="col-md-12">
						<label>Village /Town /Road:</label>
						<input type="text" name="peraddress" class="form-control" placeholder="Gashitula,Mukambari, Block-A" required />
					</div>
				</div><br />
				<div class="row">
					<div class="col-md-4 inp">
						<label>Division</label>
						<select name="perdivision" id="perdivisiondd" onChange="change_perdivision()" required >
							<option value="">Select Division</option>
							<?php 
		
							$run = mysqli_query($con,"SELECT * FROM divisions");
			
							while($row = mysqli_fetch_array($run)){
							?>
						<option value="<?php echo $row['call_name']; ?>"><?php echo $row['div_name']; ?></option>
						<?php
							}

						?>
						</select>
					</div>
					<div class="col-md-4 inp">
						<label>District</label>
						<div id="percity">
						<select id=""  >
							<option value="">Select District</option>
						</select>
						</div>
					</div>
					<div class="col-md-4 inp">
						<label>PS/Upzila</label>
						<div id="perupzila">
						<select id=""  >
							<option value="">Select PS/Upzila</option>
						</select>
						</div>
					</div>
				</div>
			</div>
		</div>
		<br />
		<div class="row">
			<div class="col-md-12 text-center">
				<h3 style="color:#fff">Educational Qualification</h3>
			</div>
		</div>
		<br />
		<div class="row">
			<div class="col-md-12">
				<table class="table inp" width="50%">
					<tr>
						<td>Exam Name</td>
						<td>Board</td>
						<td>Group/Subject</td>
						<td>Result</td>
						<td>Year</td>
					</tr>
				</table>
			</div>
		</div>
		<div class="row">
			<div class="col-md-2 inp">
				<select name="psc" id="">
					<option value="PSC">PSC</option>
				</select>
			</div>
			<div class="col-md-2"></div>
			<div class="col-md-2 inp">
				<select name="pscboard" id="">
					<option>Select One</option>
					<?php 
						$sql = "SELECT * FROM education_boards";
						$run = mysqli_query($con, $sql);
						while($row = mysqli_fetch_array($run)){
							echo "<option value='$row[name]'>$row[name]</option>";
						}
					?>
				</select>
			</div>
			<div class="col-md-2 inp">
				<select name="pscgrp" id="">
					<option>Select One</option>
					<option value="">General</option>
					<option value="Madrasah">Madrasah</option>
					<option value="Vocational">Vocational</option>
				</select>
			</div>
			<div class="col-md-2">
				<input type="text" name="pscres" class="form-control" placeholder="Result" />
			</div>
			<div class="col-md-2">
				<input type="text" name="pscyear" class="form-control" placeholder="Year" />
			</div>
		</div><br />
		<div class="row">
			<div class="col-md-2 inp">
				<select name="jsc" id="" required />
					<option value="JSC">JSC</option>
				</select>
			</div>
			<div class="col-md-2"></div>
			<div class="col-md-2 inp">
				<select name="jscboard" id="" required >
					<option value="" selected="">Select One</option>
					<?php 
						$sql = "SELECT * FROM education_boards";
						$run = mysqli_query($con, $sql);
						while($row = mysqli_fetch_array($run)){
							echo "<option value='$row[name]'>$row[name]</option>";
						}
					?>
				</select>
			</div>
			<div class="col-md-2 inp">
				<select name="jscgrp" id="" required >
					<option>Select One</option>
					<option value="General">General</option>
					<option value="Madrasah">Madrasah</option>
					<option value="Vocational">Vocational</option>
				</select>
			</div>
			<div class="col-md-2">
				<input type="text" name="jscres" class="form-control" placeholder="Result" required />
			</div>
			<div class="col-md-2">
				<input type="text" name="jscyear" class="form-control" placeholder="Year" required />
			</div>
		</div><br />
		<div class="row">
			<div class="col-md-2 inp">
				<select name="ssc" id="" required />
					<option value="SSC">SSC</option>
					<option value="SSC Voc">SSC Vocational</option>
					<option value="SSC Dakil">SSC Dakhil</option>
				</select>
			</div>
			<div class="col-md-2"></div>
			<div class="col-md-2 inp">
				<select name="sscboard" id="" required >
					<option value="" selected="">Select One</option>
					<?php 
						$sql = "SELECT * FROM education_boards";
						$run = mysqli_query($con, $sql);
						while($row = mysqli_fetch_array($run)){
							echo "<option value='$row[name]'>$row[name]</option>";
						}
					?>
				</select>
			</div>
			<div class="col-md-2 inp">
				<select name="sscgrp" id="" required >
					<option>Select One</option>
					<option value="Scince">Scince</option>
					<option value="Arts">Art's</option>
					<option value="Commerce">Commerce</option>
					<option value="SSC Dakhil">SSC Dakhil</option>
				</select>
			</div>
			<div class="col-md-2">
				<input type="text" name="sscres" class="form-control" placeholder="Result" required />
			</div>
			<div class="col-md-2">
				<input type="text" name="sscyear" class="form-control" placeholder="Year" required />
			</div>
		</div><br />
		<!--HSC-->
		<div class="row">
			<div class="col-md-2 inp">
				<select name="hsc" id="" />
					<option>Optional</option>
					<option value="HSC">HSC</option>
				</select>
			</div>
			<div class="col-md-2"></div>
			<div class="col-md-2 inp">
				<select name="hscboard" id="">
					<option>Select One</option>
					<?php 
						$sql = "SELECT * FROM education_boards";
						$run = mysqli_query($con, $sql);
						while($row = mysqli_fetch_array($run)){
							echo "<option value='$row[name]'>$row[name]</option>";
						}
					?>
				</select>
			</div>
			<div class="col-md-2 inp">
				<select name="hscgrp" id="">
					<option>Select One</option>
					<option value="Scince">Scince</option>
					<option value="Arts">Art's</option>
					<option value="Commerce">Commerce</option>
				</select>
			</div>
			<div class="col-md-2">
				<input type="text" name="hscres" class="form-control" placeholder="Result" />
			</div>
			<div class="col-md-2">
				<input type="text" name="hscyear" class="form-control" placeholder="Year" />
			</div>
		</div><br />
		<div class="row">
			<div class="col-md-12 text-center">
				<h3 style="color:#fff">Present Education Status</h3>
			</div>
		</div>
		<div class="row">
			<div class="col-md-2 inp">
				<label>Semester</label>
				<select name="sems" id="" required >
					<option value="">Select Sems</option>
					<option value="1st">1st</option>
					<option value="2nd">2nd</option>
					<option value="3rd">3rd</option>
					<option value="4th">4th</option>
					<option value="5th">5th</option>
					<option value="6th">6th</option>
					<option value="7th">7th</option>
					<option value="8th">8th</option>
				</select>
			</div>
			<div class="col-md-2 inp">
				<label>Shift</label>
				<select name="shift" id="" required >
					<option>Shift</option>
					<option value="1st">1st</option>
					<option value="2nd">2nd</option>
				</select>
			</div>
			<div class="col-md-2 inp">
				<label>Session</label>
				<select name="sess" id="" required >
					<option>Session</option>
					<?php 
						$sql = "SELECT * FROM dept_sessions";
						$run = mysqli_query($con, $sql);
						while($row = mysqli_fetch_array($run)){
							echo "<option value='$row[sessions]'>$row[sessions]</option>";
						}
					?>
				</select>
			</div>
			<div class="col-md-2">
				<label>Roll</label>
				<input type="text" name="roll" class="form-control" placeholder="Roll" required />
			</div>
			<div class="col-md-2">
				<label>Registration</label>
				<input type="text" name="reg" class="form-control" placeholder="Registration" required />
			</div>
			<div class="col-md-2 inp">
				<label>Group</label>
				<select name="group" id="" required >
					<option value="A1">A1</option>
					<option value="B1">B1</option>
					<option value="A2">A2</option>
					<option value="B2">B2</option>
				</select>
			</div>
		</div>
		<br />
		<div class="row">
			<div class="col-md-12 text-center">
				<h3 style="color:#fff">Semester Wise GPA</h3>
			</div>
		</div>
		<div class="row">
			<div class="col-md-1">
				<label>1st</label>
				<input type="text" name="1st" value="0" class="form-control"  />
			</div>
			<div class="col-md-1">
				<label>2nd</label>
				<input type="text" name="2nd" value="0" class="form-control"  />
			</div>
			<div class="col-md-1">
				<label>3rd</label>
				<input type="text" name="3rd" value="0" class="form-control"  />
			</div>
			<div class="col-md-1">
				<label>4th</label>
				<input type="text" name="4th" value="0" class="form-control"  />
			</div>
			<div class="col-md-1">
				<label>5th</label>
				<input type="text" name="5th" value="0" class="form-control"  />
			</div>
			<div class="col-md-1">
				<label>6th</label>
				<input type="text" name="6th" value="0" class="form-control"  />
			</div>
			<div class="col-md-1">
				<label>7th</label>
				<input type="text" name="7th" value="0" class="form-control"  />
			</div>
			<div class="col-md-1">
				<label>8th</label>
				<input type="text" name="8th" value="0" class="form-control"  />
			</div>
			<div class="col-md-2">
				<label>CGPA(Optional)</label>
				<input type="text" name="cgpa" class="form-control"/>
			</div>
		</div>
		<br />
		<div class="row">
			<div class="col-md-12 text-center">
				<h3 style="color:#fff">Student Photo</h3>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 inp">
				
			</div>
			<div class="col-md-6 inp">
				<label>Student Photo</label>
				<input type="file" name="image" class="form-control" required />
				<p>Note: File Format must be JPG/JPEG/PNG Format</p>
			</div>
		</div> 
		<br />
		<div class="row">
			<div class="col-md-12 text-center">
				<h3 style="color:#fff">Student Account</h3>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 inp">
				<label>Roll Number</label>
				<input type="text" name="useoll" class="form-control" required />
			</div>
			<div class="col-md-6 inp">
				<label>Set A Password</label>
				<input type="text" name="usess" class="form-control" required />
			</div>
		</div><br />
		<div class="row">
			<div class="col-md-6">
				<input type="submit" name="submit" value="Submit" class="btn btn-primary btn-block"  />
			</div>
			<div class="col-md-6">
				<input type="reset" name="reset" value="Clear All" class="btn btn-danger btn-block"  />
			</div>
		</div>
		<br />
	</div>
</form>

   

	<?php include 'libs/footer.php'; ?>
	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->	
    <script src="js/jquery-2.1.1.min.js"></script>	
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/fancybox/jquery.fancybox.pack.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/jquery.bxslider.min.js"></script>
	<script src="js/jquery.prettyPhoto.js"></script>
	<script src="js/jquery.isotope.min.js"></script> 
	<script src="js/functions.js"></script>
	<script>
	wow = new WOW(
	 {
	
		}	) 
		.init();
	</script>
	<script type="text/javascript">
	function change_predivision(){
		var xmlhttp = new XMLHttpRequest();
		xmlhttp.open("GET","libs/ajax.php?predivision=" +document.getElementById("divisiondd").value,false);
		xmlhttp.send(null);
		document.getElementById("city").innerHTML=xmlhttp.responseText;
	}
	function change_precity(){
		var xmlhttp = new XMLHttpRequest();
		xmlhttp.open("GET","libs/ajax.php?preupzila=" +document.getElementById("citydd").value,false);
		xmlhttp.send(null);
		document.getElementById("upzila").innerHTML=xmlhttp.responseText;
	}
	
	function change_perdivision(){
		var xmlhttp = new XMLHttpRequest();
		xmlhttp.open("GET","libs/ajax.php?perdivision=" +document.getElementById("perdivisiondd").value,false);
		xmlhttp.send(null);
		document.getElementById("percity").innerHTML=xmlhttp.responseText;
	}
	function change_percity(){
		var xmlhttp = new XMLHttpRequest();
		xmlhttp.open("GET","libs/ajax.php?perupzila=" +document.getElementById("percitydd").value,false);
		xmlhttp.send(null);
		document.getElementById("perupzila").innerHTML=xmlhttp.responseText;
	}
</script>
	
  </body>
</html>