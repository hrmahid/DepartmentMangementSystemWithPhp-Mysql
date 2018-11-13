<form action="" method="post">
	<input type="text" name="1st" placeholder="1st"/>
	<input type="text" name="2nd" placeholder="2nd"/>
	<input type="text" name="3rd" placeholder="3rd"/>
	<input type="text" name="4th" placeholder="4th"/>
	<input type="text" name="5th" placeholder="5th"/>
	<input type="text" name="6th" placeholder="6th"/>
	<input type="text" name="7th" placeholder="7th"/>
	<input type="text" name="8th" placeholder="8th"/>
	<input type="submit" name="submit" value="Submit"/>
</form>
<?php
	
	if(isset($_POST['submit'])){
		
		@$name1 = $_POST['1st'];
		@$name2 = $_POST['2nd'];
		@$name3 = $_POST['3rd'];
		@$name4 = $_POST['4th'];
		@$name5 = $_POST['5th'];
		@$name7 = $_POST['7th'];
		@$name8 = $_POST['8th'];
		@$total = ($name1*5)/100+($name2*5)/100+($name3*5)/100+($name4*10)/100+($name5*15)/100+($name6*20)/100+($name7*25)/100+($name8*15)/100;
		echo $total;
	}

 ?>