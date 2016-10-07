<?php
		$connection = mysqli_connect('localhost','root','root','employee');
		mysqli_select_db($connection, 'employee');
		$username = $_POST['username'];
		$password = $_POST['password'];
		 
		$checklogin = mysqli_query($connection, "SELECT * FROM user WHERE userid = '".$username."' AND password = '".$password."'");
		 
		if(mysqli_num_rows($checklogin) == 1)
		{
			$row = mysqli_fetch_array( $checklogin, MYSQLI_ASSOC);
			$empcode = $row['empcode'];
			echo "<h1>Welcome $empcode</h1>";
		}
		else
		{
			echo "<h1>Incorrect Credentials</h1>";
		}
?>