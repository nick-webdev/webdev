<?php

$purchased = array();
$ammount = array();
$type = array();
$total;
$numPurchased = 0;
$product = array("Homemade Original", "Glazed", "Chocolate", "Vanilla", "Cream-Filled");
$regPrice = array(12, 14, 15, 15, 16);
$miniPrice = array(7, 8, 8, 8, 8);

if ($_POST['Homemade'] != NULL){
    $purchased[0] = "1";
    $numPurchased++;
    $ammount[0] = $_POST['Homemade'];
    switch($_POST['home']){
        case "mini":
            $type[0] = "mini";
            break;
        case "reg":
            $type[0] = "reg";
            break; }}

 if ($_POST['glazed'] != NULL){
    $purchased[1] = "1";
    $numPurchased++;
    $ammount[1] = $_POST['glazed'];
    switch($_POST['glaze']){
        case "mini":
            $type[1] = "mini";
            break;
        case "reg":
            $type[1] = "reg";
            break; }}
if ($_POST['choc'] != NULL){
    $purchased[2] = "1";
    $numPurchased++;
    $ammount[2] = $_POST['choc'];
    switch($_POST['chocolate']){
        case "mini":
            $type[2] = "mini";
            break;
        case "reg":
            $type[2] = "reg";
            break; }}
if ($_POST['van'] != NULL){
    $purchased[3] = "1";
    $numPurchased++;
    $ammount[3] = $_POST['van'];
    switch($_POST['vanilla']){
        case "mini":
            $type[3] = "mini";
            break;
        case "reg":
            $type[3] = "reg";
            break; }}
if ($_POST['cream'] != NULL){
    $purchased[4] = "1";
    $numPurchased++;
    $ammount[4] = $_POST['cream'];
    switch($_POST['filled']){
        case "mini":
            $type[4] = "mini";
            break;
        case "reg":
            $type[4] = "reg";
            break; }}

$orderOverview;
$tempPrice = 0;

for ($i = 0; $i < 4; $i++) {
    if ($purchased[$i] == "1") {
        if ($type[$i] == "reg")
            $tempPrice = $regPrice[$i];
        if ($type[$i] == "mini")
            $tempPrice = $miniPrice[$i];

		$total = $total+ ($ammount[$i] * $tempPrice);
        $orderOverview .= "Item Ordered: " .$product[$i] ." Amount Ordered: "
            .$ammount[$i] ." dozen " ." Size: " .$type[$i] ." Current Total: $"
            .$total ."\r\n"; }}

	$fname = $_POST['firstName'];
	$lname = $_POST['lastName'];
	$em = $_POST['email'];
	$card = $_POST['card'];
	for ($i = 0; $i < 4; $i++){
		if ($purchased[$i] == "1"){
			$queryy = "SELECT * FROM Order";
			$result = $db_connection->query($queryy);
			$numRecords = mysqli_num_rows($result);
			$id = $numRecords;
			$id++;
			$prod = $product[$i];
			$am = $amount[$i];
			$query = "INSERT INTO Order(
   			firstName,lastName,email,cardNum,product,type,amount,orderID)
			VALUES('$fname', '$lname', '$email', '$card', '$prod', '$am', '$id');";
			$db_connection->query($query); }}

$headerToBusiness = "From: " .$_POST['email'] ."\r\n";
mail("n_oblack@hotmail.com", $messageToBusiness, $headerToBusiness);



$messageToBusiness =
    "Buyer: ".$_POST['salute']." "
            .$_POST['firstName']." "
            .$_POST['lastName']."\r\n".
    "E-mail address: ".$_POST['email']."\r\n".
    "Phone number: ".$_POST['phone']."\r\n".
    "Address: ".$_POST['address']."\r\n".
    "Card Number: ".$_POST['card']."\r\n";
$messageToBusiness .= "Overview of the order: <br />" .$orderOverview;

$messageToClient =
    "Dear ".$_POST['salute']." ".$_POST['lastName'].":\r\n".
    "The following order was placled by you: \r\n\r\n".
    $messageToBusiness
    ."------------------------\r\nThank you for the feedback! \r\n" ."\r\n";

$headerToClient = "From: n_oblack@hotmail.com" ."\r\n";

mail($_POST['email'], $messageToClient, $headerToClient);

$display = str_replace("\r\n", "<br />\r\n", $messageToClient);
$display =
    "<html><head><title>Your Message</title></head><body><tt>".
    $display.
    "</tt></body></html>";
echo $display;

?>
