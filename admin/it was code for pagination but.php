//MyExtra for page-->
										$perpage = 05;
										if (isset($_GET['page'])) {
											$page = $_GET['page'];
										}

										$start_from =($page-1) * 05;
								
								$colle = "SELECT * FROM students WHERE sessions ='$sess' AND shift ='$shift' AND clggroup ='$grp'";
								$ran = mysqli_query($con,$colle);
								$countt = mysqli_num_rows($ran);
								
								@$total = ceil($countt/$perpage);



									//main coding	

										$sql = "SELECT * FROM students WHERE sessions ='$sess' AND shift ='$shift' AND clggroup ='$grp'LIMIT $start_from,$perpage";
										$runn = mysqli_query($con, $sql);

									while ($res = mysqli_fetch_assoc($runn)) {
											
											?>
									<tr>
									<td><?php echo $res['name']; ?></td>
									<td><?php echo $res['roll']; ?></td>
									<td><?php echo $res['registration']; ?></td>
									<td><?php echo $res['clggroup']; ?></td>
									<td><?php echo $res['sessions']; ?></td>
									<td><a href="#"><abbr title="Edit"><i class="fa fa-edit"></i></abbr></a></td>
									<td><a href="view_as_pdf.php?id=<?php echo $res['id']; ?>"><abbr title="View"><i class="fa fa-html5"></i></abbr></a></td>
									<td><a href="#"><abbr title="Delete"><i class="fa fa-times"></i></abbr></a></td>
									</tr>
									
								<?php	}
							}
							
									 ?>	

							</table>
							 <tr>
										<td><?php for ($i=1;$i <= @$total;$i++) { 
									echo "<a href='dashboard.php?page=$i'>$i</a>";
								} ?></td>
									</tr>