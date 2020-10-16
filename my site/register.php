<?php
	require 'conn.php';
	
	if(ISSET($_POST['register'])){
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$region = $_POST['region'];
		$address = $_POST['address'];
		$number = $_POST['number'];
		$cat = $_POST['cat'];
		$item = $_POST['item'];
		
		
		
		
		
		
		mysqli_query($conn, "INSERT INTO `user` VALUES('', '$firstname', '$lastname', '$region', '$address', '$number', '$cat', '$item')") or die(mysqli_error());
		echo "<h4 style='margin-bottom: 20px;'><b>Success</b></h4><h5>Thank you for providing the details. One of our agent will contact soon.</h5>";
	}
?>