<?php 
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "dailynetwork";
	
	try{
		$conn = new PDO("mysql:host=$servername;dbname=$dbname;", $username, $password);
	} catch(PDOException $e){
		die( "Connection failed: " . $e->getMessage());
	}
?>