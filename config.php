<?php
	$servername = 'sql6.freesqldatabase.com';
	$user = 'sql6418856';
	$pass = 'NMgCUlhvmR';
	$dbname = 'sql6418856';

	$conn = mysqli_connect($servername,$user,$pass,$dbname);

	if(!$conn){
		die("Could Not Connect to the database".mysqli_connect_error());
	}

?>