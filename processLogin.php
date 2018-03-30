<?php
$email = $_POST['email'];
$password = $_POST['password']; 
	
$query = "SELECT * FROM Customers WHERE
	email = '$email';";
	
$rowWithMatchingLoginName = $db_connection->query($query)
	or die(mysql_error());
	
$numRecords = mysqli_num_rows($rowWithMatchingLoginName);

if ($numRecords > 0)
{
		$row = mysqli_fetch_array($rowWithMatchingLoginName);
		if ($password == $row["password"])
		{
				$_SESSION['email'] = $row['email'];
				$_SESSION['firstName'] = $row['firstName'];
				$_SESSION['lastName'] = $row['lastName'];
				$goto = "Location: order.php";
		}
		else
		{
			echo ("Invalid Login, please try again");
			$goto = "Location: login.php";
		}
}
