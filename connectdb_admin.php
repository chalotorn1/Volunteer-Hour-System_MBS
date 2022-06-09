<meta charset="utf-8">
<?php
	$host="127.0.0.1";
	$user="root";
	$password="";
	$dbname="eform"; 

	// Create connection
	$conn = mysqli_connect($host, $user, $password, $dbname);
	// Check connection
	if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
	}
		
	// Change character set to utf8
	//mysqli_set_charset($con,"utf8");

 ?>