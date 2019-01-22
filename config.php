<!-- Kết nối database -->
<?php
$hostname = "localhost";
$user = "root";
$password ="";
$database = "demo_project";
$db = mysqli_connect($hostname, $user, $password, $database);
	if ($db->connect_error) {     // Check connection
		die("Connection failed: " . $db->connect_error);
	} 
	mysqli_set_charset($db, "UTF8");
	?>