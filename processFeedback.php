<?php

// $rating(4) = array of 5 int values, values are between 1-3 for bad, average and great
// $checked(4) = array of 5 int values, value is 1 if its been checked and 0 if not
// $product(4) = array of 5 string values assigned to each type of donut
// $comments(4) = array of 5 strings with the comments added in the form


//echo $_POST['homeComments'];

$rating = array();
$checked= array();
$product = array("Homemade Original", "Glazed", "Chocolate", "Vanilla", "Cream-Filled");

$comments = array($_POST['homeComments'],$_POST['glazeComments'],$_POST['chocComments'],$_POST['vanComments'],$_POST['creamComments']);
$numChecked = 0;

// Initialize arrays to 0

for($i = 0; $i < 4; $i++){
    $checked[$i] = "0";
    $rating[$i] = "0"; }

// Check various checkboxs and ratings from the form

if($_POST['checkHome'] == "yes"){
    $checked[0] = "1";
    $numChecked++;}
if($_POST['radHome'] == "rd1")
    $rating[0] = "1";
if($_POST['radHome'] == "rd2")
    $rating[0] = "2";
if($_POST['radHome'] == "rd3")
    $rating[0] = "3";

if($_POST['checkGlazed'] == "yes") {
    $checked[1] = "1";
    $numChecked++;}
if($_POST['radGlaze'] == "rd1")
    $rating[1] = "1";
if($_POST['radGlaze'] == "rd2")
    $rating[1] = "2";
if($_POST['radGlaze'] == "rd3")
    $rating[1] = "3";

if($_POST['checkChoc'] == "yes") {
    $checked[2] = "1";
    $numChecked++;}
if($_POST['radChoc'] == "rd1")
    $rating[2] = "1";
if($_POST['radChoc'] == "rd2")
    $rating[2] = "2";
if($_POST['radChoc'] == "rd3")
    $rating[2] = "3";

if($_POST['checkVan'] == "yes") {
    $checked[3] = "1";
    $numChecked++;}
if($_POST['radVan'] == "rd1")
    $rating[3] = "1";
if($_POST['radVan'] == "rd2")
    $rating[3] = "2";
if($_POST['radVan'] == "rd3")
    $rating[3] = "3";

if($_POST['checkCream'] == "yes") {
    $checked[4] = "1";
    $numChecked++;}
if($_POST['radCream'] == "rd1")
    $rating[4] = "1";
if($_POST['radCream'] == "rd2")
    $rating[4] = "2";
if($_POST['radCream'] == "rd3")
    $rating[4] = "3";

// $feedbackOverview - Finds all the data in the form that was filled out and grabs it

$feedbackOverview;

    for ($i = 0; $i < 4; $i++){
		if ($checked[$i] == "1" && $i == 0){
			$feedbackOverview = "Item Ordered: " .$product[$i] ." " ."Rating given: " .$rating[$i]
            ." " ."Additional Comments: " .$comments[$i] ."<br />";}
        if ($checked[$i] == "1" && $i > 0){
            $feedbackOverview .= "Item Ordered: " .$product[$i] ." Rating given: " .$rating[$i].
            " Additional Comments: " .$comments[$i] ."<br />";}}

// $messageToBusiness = Constructs the whole message to be sent to the business

$messageToBusiness =
    "From: ".$_POST['salute']." "
            .$_POST['firstName']." "
            .$_POST['lastName']."\r\n".
    "E-mail address: ".$_POST['email']."\r\n".
    "Phone number: ".$_POST['phone']."<br />";
$messageToBusiness .= "Overview of the given feedback: <br />" .$feedbackOverview;

//Send the e-mail feedback message to the business

$headerToBusiness = "From: " .$_POST['email'] ."\r\n";


mail("n_oblack@hotmail.com", $messageToBusiness, $headerToBusiness);

//Construct the confirmation message to be e-mailed to the client

$messageToClient =
    "Dear ".$_POST['salute']." ".$_POST['lastName'].":\r\n".
    "The following feedback was recieved from you: \r\n\r\n".
    $messageToBusiness
    ."------------------------\r\nThank you for the feedback! \r\n" ."\r\n";

if ($_POST['checkReply'] == "yes")
    $messageToClient .= "P.S. We will contact you shortly with more information.";

//Send the confirmation message to the client
$headerToClient = "From: n_oblack@hotmail.com" ."\r\n";
mail($_POST['email'], $messageToClient, $headerToClient);

//Transform the confirmation message to the client into XHTML format and display it
$display = str_replace("\r\n", "<br />\r\n", $messageToClient);
$display =
    "<html><head><title>Your Message</title></head><body><tt>".
    $display.
    "</tt></body></html>";
echo $display;

$fileVar = fopen("feedback.txt", "a")
    or die("Error: Could not open the log file.");
fwrite($fileVar, "\n-------------------------------------------------------\n")
    or die("Error: Could not write to the log file.");
fwrite($fileVar, "Date received: ".date("jS \of F, Y \a\\t H:i:s\n"))
    or die("Error: Could not write to the log file.");
fwrite($fileVar, $messageToBusiness)
    or die("Error: Could not write to the log file.");
?>
