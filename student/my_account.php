<?php 
	session_start();
	if(isset($_SESSION['u_name'])){
		include '../config/dbcon.php';
		$id = $_GET['id'];
		$sql = "SELECT * FROM students WHERE id = '$id'"; 
		$run = mysqli_query($con, $sql);
		$row = mysqli_fetch_assoc($run);
	}
	else{
		echo "<script>window.open('../login.php','_self');</script>";
	}
	

 ?>
 <?php include '../libs/menu.php' ?>
 <div class="container-fluid">
		<div class="row">
			<div class="col-md-12 text-center">
				<h4>Welcome To Your Profile <span style="color: red;"> <?php echo $row['name']; ?></span></h4>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4"> 
				<a href="update_user.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Update Information</a>
			</div>
			<div class="col-md-4">
				<div class="alert alert-danger"><b>Student Can Only Edit Data</b></div>
			</div>
			<div class="col-md-2"> 
				<a href="print_as_pdf.php?id=<?php echo $row['id']; ?>" class="btn btn-success">Print As PDF</a>
			</div>
			<div class="col-md-2">
				<img src="../images/student_img/<?php echo $row['image']; ?>" alt="<?php echo $row['name']; ?>" width="130px;" height="145px;"/>
			</div>
		</div>
		<br/>
		<!--PHP ECHO DATA-->
		<div style="color:black;">
		<div class="well">
			<table class="table table-striped" width="50%">
			<tr>
				<th>Student Name:</th>
				<td><?php echo $row['name']; ?></td>
			</tr>
			<tr>
				<th>Father's Name:</th>
				<td><?php echo $row['fname']; ?></td>
			</tr>
			<tr>
				<th>Mother's Name:</th>
				<td><?php echo $row['mname']; ?></td>
			</tr>
			<tr>
				<th>Date of birth:</th>
				<td><?php echo $row['birthdate']; ?></td>
			</tr>
			<tr>
				<th>Contact Mobile:</th>
				<td><?php echo $row['personalphone']; ?></td>
			</tr>
			<tr>
				<th>Guardian Phone:</th>
				<td><?php echo $row['homephone']; ?></td>
			</tr>
			<tr>
				<th>E-mail:</th>
				<td><?php echo $row['email']; ?></td>
			</tr>
			<tr>
				<th>Gender:</th>
				<td><?php echo $row['sex']; ?></td>
			</tr>
			<tr>
				<th>Religion:</th>
				<td><?php echo $row['relegion']; ?></td>
			</tr>
			<tr>
				<th>Quota:</th>
				<td><?php echo $row['quota']; ?></td>
			</tr>
			<tr>
				<th>Home District:</th>
				<td><?php echo $row['permadist']; ?></td>
			</tr>
			</table>
		</div>
		<div class="well text-center">
			<h4 class="text-danger">Address</h4>
		</div>
		<div class="well">
			<table class="table table-striped">
				<tr colspan="2">
					<th colspan="2">Mailing Address/Present Address</th>
					<th colspan="2">Permanent Address</th>
				</tr>
				<tr>
					<th>Care of:</th>
					<td><?php echo $row['presentcareof']; ?></td>
					<th>Care Of:</th>
					<td><?php echo $row['percareof']; ?></td>
				</tr>
				<tr>
					<th>Village/Town/Road:</th>
					<td><?php echo $row['presentaddrs']; ?></td>
					<th>Village/Town/Road:</th>
					<td><?php echo $row['peraddrs']; ?></td>
				</tr>
				<tr>
					<th>PS/Upazila:</th>
					<td><?php echo $row['prespoliceupzila']; ?></td>
					<th>PS/Upazila:</th>
					<td><?php echo $row['perpoliceupzila']; ?></td>
				</tr>
				
				<tr>
					<th>Present District:</th>
					<td><?php echo $row['presenddist']; ?></td>
					<th>Permanent District:</th>
					<td><?php echo $row['permadist']; ?></td>
				</tr>
			</table>
		</div>
		<div class="well text-center text-primary">
			<h3>Education Qualification</h3>
		</div>
		<div class="well">
			<table class="table table-striped">
				<tr>
					<th>Examination</th>
					<th colspan="2">Board/Institute</th>
					<th colspan="2">Group/Subject/Degree</th>
					<th>Result</th>
					<th>Year</th>
				</tr>
				<?php
					if (!$row['psc'] == "") {
						echo "<tr>
							<td>$row[psc]</td>
							<td colspan='2'>$row[pscboard]</td>
							<td colspan='2'>$row[pscgrp]</td>
							<td>$row[pscres]</td>
							<td>$row[pscyear]</td>
							</tr>";
					}
				 ?>
				 <?php
					if (!$row['jsc'] == "") {
						echo "<tr>
							<td>$row[jsc]</td>
							<td colspan='2'>$row[jscboard]</td>
							<td colspan='2'>$row[jscgrp]</td>
							<td>$row[jscres]</td>
							<td>$row[jscyear]</td>
							</tr>";
					}
				 ?>
				 <tr> 
				 	<td><?php echo $row['ssc']; ?></td>
					<td colspan="2"><?php echo $row['sscboard']; ?></td>
					<td colspan="2"><?php echo $row['sscgrp']; ?></td>
					<td><?php echo $row['sscres']; ?></td>
					<td><?php echo $row['sscyear']; ?></td>
				 </tr>
				 <?php
					if (!$row['hsc'] == "") {
						echo "<tr>
							<td>$row[hsc]</td>
							<td colspan='2'>$row[hscboard]</td>
							<td colspan='2'>$row[hscgrp]</td>
							<td>$row[hscres]</td>
							<td>$row[hscyear]</td>
							</tr>";
					}
				 ?>
			</table>
		</div>
		<div class="well text-center text-success">
			<h3>Present Education Status</h3>
		</div>
		<div class="well">
			<table class="table table-striped">
				<tr>
					<th>Semester</th>
					<td><?php echo $row['semester']; ?></td>
					<th>Roll</th>
					<td><?php echo $row['roll']; ?></td>
				</tr>
				<tr>
					<th>Session</th>
					<td><?php echo $row['sessions']; ?></td>
					<th>Reg No</th>
					<td><?php echo $row['registration']; ?></td>
				</tr>
				<tr>
					<th>Shift</th>
					<td><?php echo $row['shift']; ?></td>
					<th>Group</th>
					<td><?php echo $row['clggroup']; ?></td>
				</tr>
			</table>
		</div>
		<div class="well text-center">
			<h4 style="color:red;">Results</h4>
		</div>
		<div class="well">
			<table class="table table-striped">
				<tr>
					<th colspan="8">Semester Wise</th>
					<th colspan="4">CGPA</th>
				</tr>
				<tr>
					<th>1<sup>st</sup></th>
					<th>2<sup>nd</sup></th>
					<th>3<sup>rd</sup></th>
					<th>4<sup>th</sup></th>
					<th>5<sup>th</sup></th>
					<th>6<sup>th</sup></th>
					<th>7<sup>th</sup></th>
					<th>8<sup>th</sup></th>
					<th colspan="4"></th>
					<th colspan="2"></th>
				</tr>
				<tr>
					<td><?php echo $row['1semsresult']; ?></td>
					<td><?php echo $row['2semsresult']; ?></td>
					<td><?php echo $row['3semsresult']; ?></td>
					<td><?php echo $row['4semsresult']; ?></td>
					<td><?php echo $row['5semsresult']; ?></td>
					<td><?php echo $row['6semsresult']; ?></td>
					<td><?php echo $row['7semsresult']; ?></td>
					<td><?php echo $row['8semsresult']; ?></td>
					<td><?php echo $row['cgpa']; ?></td>
				</tr>
			</table>
		</div>
	</div>
</div>
<?php include '../libs/footeri.php' ?>