<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Thank you!</title>
	<link rel="stylesheet" type="text/css" media="screen" href="main.css">
</head>

<body>
	<div class="title">
		<h1>Halifax Kayak and Canoe Club</h1>
	</div>
	
<div class="section">

<?php

//Create proper variables and fill using $_GET instead of one-shotting
$location=$_GET["location"];
$date=$_GET["date"];
$email=$_GET["email"];

	echo "Thank you for booking your trip to " . $location . " on " . $date . ", " . $email . ".\n";
	echo "<br>";
	echo "We will be in touch prior to your booking to arrange your outing.";
?>
