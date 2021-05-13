<html>
	<head>
		<title>Carpet Cost Quote</title>
	</head>

	<style>
		html, body {
			height: 100%;
		}
		html {
			display: table;
			margin: auto;
		}
		body {
			font-size: x-large;
			display: table-cell;
			vertical-align: middle;
		}
	</style>
	<body>
		<h1 style="color: blue;">Your Estimated Carpet Costs</h1>
		<?php
			function carpet_cost($width, $length, $grade, &$carpet_cost) {
				if ($width > 0 && $length > 0) {
					if ($grade == 1) {
						$carpet_cost = $width * $length * 4.99;
						return 1;
					} elseif ($grade == 2) {
						$carpet_cost = $width * $length * 3.99;
						return 1;
					} else {
						return 0;
					}
				} else return 0;
			}
			$width = $_POST["width"];
			$length = $_POST["length"];
			$grade = $_POST["grade"];
			$carpet_cost = 0;
			$install_cost = 1;
			$ret = carpet_cost($width, $length, $grade, $carpet_cost);

			if ($ret) {
				$room_size = $width * $length;
				$total_cost = $carpet_cost + ($carpet_cost * .05) + $install_cost;
				print ("Total square feet = <strong>$room_size m<sup>2</sup></strong><br><br>");
				print ("Carpet grade = <strong>$grade</strong><br><br>");
				print ("Carpet cost = <strong>\$$carpet_cost</strong><br><br>");
				print ("Total cost estimate (installed) = <strong>\$$total_cost</strong><br><br>");
			} else {
				print ("Illegal value received");
			}
		?>
	</body>
</html>