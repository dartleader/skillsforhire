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
	echo "Thank you for booking your trip to $_GET[location] on $_GET[date], $_GET[email]\n";
	echo "<br>";
	echo "We will be in touch prior to your booking to arrange your outing.";
?>
