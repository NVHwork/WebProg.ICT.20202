<html>
	<head>
		<title>First Test</title>
	</head>
	
	<body>
	<h1>My first PHP page</h1>
	<h3>This is NVH</h3>

	<?php
		echo "Hello World!<br>";
		# ECHO "Hello World!<br>";

		print ("<font color=\"blue\">");

		$color = "blue";
		echo "My house is " . $color . ".<br>";
		/*echo "My house is " . $color . "<br>";
		echo "My boat is " . $color . "<br>";*/

		print ("<font color=\"green\">");
		$x = 5;
		$y = 10;
		function test1() {
			// global $x, $y;
			// $y = $x + $y;
			$GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
			// echo "<p>Variable y inside function is: $y</p>";
		}
		test1();
		echo "<p>Variable x outside function is: $x</p>";
		echo $y;

		function test2() {
			static $x = 0;
			echo "<br>$x";
			$x++;
		}
		test2(); test2(); test2();
	?>

	</body>
</html>