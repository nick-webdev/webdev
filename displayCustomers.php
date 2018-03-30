<?php
session_start();
include "db.php";

$query = "SELECT * FROM Customers";
$result = $db_connection->query($query);
$numRecords = mysqli_num_rows($result);

echo "<table align='center'>";
echo "<tr><td><strong>First Name</strong</td>
	<td align='center'><strong>Last Name</strong></td>
	<td align='center'><strong>Email</strong></td>
	<td align='center'><strong>Password</strong></td>
	<td align='center'><strong>Admin?</strong></td>
	</tr>";

for ($i = 0; $i < $numRecords; $i++)
{
	echo "<tr>";
	$row = mysqli_fetch_array($result);
	echo "<td align='center'>";
	echo $row["firstName"];
	echo "<td align='center'>";
	echo $row["lastName"];
	echo "</td><td align='center'>";
	echo $row["email"];
	echo "</td><td align='center'>";
	echo $row["password"];
	echo "</td><td align='center'>";
	echo $row["admin"];
	echo "</td><td align='center'>";

	//echo "<a href=\"purchase.php?prod='".$row["productID"]."'\">";
	echo "</td></tr>";
}

echo "</table>";
?>
