<?php
session_start();
include "db.php";

$query = "SELECT * FROM Order";
$result = $db_connection->query($query);
$numRecords = mysqli_num_rows($result);

echo "<table align='center'>";
echo "<tr><td><strong>OrderID</strong</td>
	<td align='center'><strong>First Name</strong></td>
	<td align='center'><strong>Last Name</strong></td>
	<td align='center'><strong>Email</strong></td>
	<td align='center'><strong>Card Number</strong></td>
	<td align='center'><strong>Product</strong></td>
	<td align='center'><strong>Type</strong></td>
	<td align='center'><strong>Amount</strong></td>
	</tr>";

for ($i = 0; $i < $numRecords; $i++)
{
	echo "<tr>";
	$row = mysqli_fetch_array($result);
	echo "<td align='center'>";
	echo $row["orderID"];
	echo "<td align='center'>";
	echo $row["firstName"];
	echo "</td><td align='center'>";
	echo $row["lastName"];
	echo "</td><td align='center'>";
	echo $row["email"];
	echo "</td><td align='center'>";
	echo $row["cardNum"];
	echo "</td><td align='center'>";
	echo $row["product"];
	echo "</td><td align='center'>";
	echo $row["type"];
	echo "</td><td align='center'>";
	echo $row["amount"];
	echo "</td><td align='center'>";
	//echo "<a href=\"purchase.php?prod='".$row["productID"]."'\">";
	echo "</td></tr>";
}

echo "</table>";
?>
