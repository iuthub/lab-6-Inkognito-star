<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Buy Your Way to a Better Education!</title>
		<link href="buyagrade.css" type="text/css" rel="stylesheet" />
	</head>
	<body>
		<h1>Buy Your Way to a Better Education!</h1>
		<p>
			The rough economy, along with recent changes in University of Washington policy, now allow us to offer grades for money.  That's right!  All you need to get a 4.0 in this course is cold, hard, cash.
		</p>
		<hr />
		<h2>Give Us Your Money</h2>
		<form action="sucker.php" method="post" enctype="multipart/form-data">
			<label for="name">Name:</label>
			<input type="text" name="name" placeholder="Enter your name"><br>

			<label for="section">Section:</label>
			<select name="section">
				<option value="">Please choose an option</option>
				<option value="ma">MA</option>
				<option value="mh">MH</option>
			</select><br>

			<label for="credit_card">Credit Card:</label>
			<input type="text" name="credit_card" placeholder="Credit Card Number"><br>

			<label for="type">Visa</label>
			<input type="radio" name="type" value="Visa">

			<label for="type">Master Card</label>
			<input type="radio" name="type" value="MasterCard"><br>

			<input type="submit" name="submit" value="I am a giant sucker.">
		</form>
	</body>
</html>
