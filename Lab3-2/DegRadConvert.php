<html>
	<head>
		<title>Degree - Radian Converter</title>
	</head>

	<body>
		<h2>Degree - Radian Converter</h2><hr>
		<form action="" method="post">
			<label for="number">Input number and select the unit!</label><br>
			<input type="number" name="number">
			<select name="unit">
				<option value="degrees">degrees</option>
				<option value="radians">radians</option>
			</select><br><br>
			<button type="submit">Submit</button>
			<button type="reset">Reset</button><hr>

			<?php
				$number = $_POST["number"];
				$unit = $_POST["unit"];
				if (is_numeric($number)) {
					if ($unit == "degrees") { // Convert degree to radian
						$convertVal = $number / 180 * pi();
						$convertUnit = "radians";
					} else { // Convert radian to degree
						$convertVal = $number * 180 / pi();
						$convertUnit = "degrees";
					}
					echo "$number $unit = $convertVal $convertUnit";
				} else {
					print ("Your input is not numeric. Please input a number!!!");
				}
			?>
		</form>
	</body>
</html>