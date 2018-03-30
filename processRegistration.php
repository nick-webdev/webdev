<?php
    
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$password = $_POST['password'];
$admin = $_POST['administrator'];    

if($_POST['administrator'] == "yes")
	$admin = "yes";
else
	$admin = "no";
	
//if (emailExists($email))
  //  echo "Your e-mail is already registered";


$query = "INSERT INTO Customers(
    firstName,lastName,email,password,admin)
VALUES(
        '$firstName', '$lastName', '$email', '$password', '$admin');";
		
$db_connection->query($query);

echo "Registration complete";

// Helper Functions 

function emailExists($email)
{
    $query = "SELECT * FROM CUSTOMERS WHERE email = '$_POST[email]'";
    $customers = mysqli_query($db_connection, $query)
        or die(mysql_error());
    $numRecords = mysql_num_rows($customers);
    if ($numRecords > 0)
        return true;
    else
        return false;
}
	
?>