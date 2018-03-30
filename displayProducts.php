<?php
session_start();
include "db.php";

$query = "SELECT * FROM Product";
$result = $db_connection->query($query);
$numRecords = mysqli_num_rows($result);

echo "<table align='center'>";
echo "<tr><td><strong>Product ID</strong</td>
	<td align='center'><strong>Description</strong></td>
	<td align='center'><strong>Stock</strong></td>
	<td align='center'><strong>Price</strong></td>
	</tr>";

for ($i = 0; $i < $numRecords; $i++)
{
	echo "<tr>";
	$row = mysqli_fetch_array($result);
	echo "<td align='center'>";
	echo $row["productID"];
	echo "<td align='center'>";
	echo $row["description"];
	echo "</td><td align='center'>";
	echo $row["stock"];
	echo "</td><td align='center'>";
	echo $row["price"];
	echo "</td><td align='center'>";
	//echo "<a href=\"purchase.php?prod='".$row["productID"]."'\">";
	echo "</td></tr>";
}

echo "</table>";
?>
