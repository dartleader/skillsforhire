<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Book a Trip!</title>
	<link rel="stylesheet" type="text/css" media="screen" href="main.css">
</head>
<body>
	<div class="title">
		<h1>Halifax Kayak and Canoe Club</h1>
	</div>
<div class="booking-form">
	<form method="get" action="thank-you.php" id="booking-form">
			<label for="email" class="form-label">Email-Address</label>
				<input type="email" name="email" id="email" class="form-control">
			<label for="location" class="form-label">Location</label>
				<select id="location" name="location">
					<option value="Halifax">Halifax</option>
					<option value="Dartmouth">Dartmouth</option>
					<option value="Truro">Truro</option>
				</select>
			<br>
			<label for="date" id="date">Trip Date</label>
				<input type="date" name="date" id="date" class="form-control">
			<br>
	<input type="submit" name="submit" value="Book your trip!" class="btn">
	</form>
</div>

</body>
</html>
