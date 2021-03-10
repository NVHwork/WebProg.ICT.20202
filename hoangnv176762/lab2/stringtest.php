<html>
	<head>
		<title>String test in PHP</title>
	</head>
	
	<body>
		<?php
			$s1 = "This is";
			$s2 = "the best";
			$s3 = "thing ever";
			$s4 = "    For    the  		best 	in our 	life	 ";
			$s5 = "Love The Time We Have Together!";

			// Concatenation
			print $s1 . $s2 . $s3;
			print "<br>$s1 $s2 $s3<hr>";

			// String length
			$len1 = strlen($s1);
			print "Length of \"$s1\" = $len1<hr>";

			// Trim blank
			$trim4 = trim($s4);
			print "\"$s4\"<hr>";

			// Uppercase and Lowercase
			$up5 = strtoupper($s5);
			$low5 = strtolower($s5);
			print "Upper: $up5<br>Lower: $low5<hr>";

			// Sub-string
			$sub5_1 = substr($s5, 0, 4);
			$sub5_2 = substr($s5, 5, 8);
			print "Sub 5.1 = \"$sub5_1\"<br>Sub 5.2 = \"$sub5_2\"<hr>";
		?>
	</body>
</html>