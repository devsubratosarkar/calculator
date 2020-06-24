<!DOCTYPE html>
<html>
<head>
	<title>Calculator</title>
</head>
<body>


	<form method="post" action="action.php">
		<strong>Number One</strong>
		<input type="number" name="number_one" required> <br> <br>
		<strong>Type</strong>
		<input type="text" name="type" required><br> <br>
		<strong>Number Two</strong>
		<input type="number" name="number_two" required><br> <br>
		

		<input type="submit" name="Submit">
		<a href="calculator.php" >Reset</a>

	</form>


	<?php

		if (isset($_GET['result'])) {
			echo "Result : ".$_GET['result'];			
		}

	?>

</body>
</html>