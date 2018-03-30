<?php

$db_location = "localhost";
$db_username = "n090909o";
$db_password = "022894";
$db_database = "n090909o";

$db_connection = new mysqli($db_location, $db_username, $db_password, $db_database);
	if ($db_connection->connect_error) 
		die("Connection failed: " . $db_connnection->connect_error);
?>
