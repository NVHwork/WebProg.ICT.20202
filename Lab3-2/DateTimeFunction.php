<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>DateTimeFunction</title>
</head>

<body>
    <?php
	function MainFunc($name1, $name2, $day1, $day2, $month1, $month2, $year1, $year2)
	{
		$date1 = $year1 . "-" . $month1 . "-" . $day1;
		$date2 = $year2 . "-" . $month2 . "-" . $day2;
		// validate birthdays
		if (!checkdate($month1, $day1, $year1)) {
			print("First birthday is invalid <br>");
			return;
		}
		if (!checkdate($month2, $day2, $year2)) {
			print("Second birthday is invalid <br>");
			return;
		} else {
			// convert birthday
			$weekday1 = date("l", strtotime($date1));
			$weekday2 = date("l", strtotime($date2));
			$monthName1 = date("F", strtotime($date1));
			$monthName2 = date("F", strtotime($date2));

			// display info
			$age1 = date("Y") - $year1;
			$age2 = date("Y") - $year2;
			print("$name1 was born on $weekday1, $monthName1 $day1, $year1 <br>");
			print("$name2 was born on  $weekday2, $monthName2 $day2, $year2 <br>");
			print("<br>$name1 is $age1 years old <br>");
			print("<br>$name2 is $age2 years old <br>");

			// calculate diff
			$difference = abs(strtotime($date2) - strtotime($date1));
			$years = floor($difference / (365 * 3600 * 24));
			$months = floor(($difference - $years * 365 * 3600 * 24) / (30 * 3600 * 24));
			$days = floor(($difference - $years * 365 * 3600 * 24 - $months * 30 * 3600 * 24) / (3600 * 24));
			print("<br><br>Diffenrence between two birthday is $years years, $months months, $days days <br><br>");
		}
	}
	?>


    <font color="#D2D3AB" size="699px">DateTime Processing</font>

    <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="POST">

        <br><label for="name1">First full name is:</label>
        &nbsp;
        <input type="text" name="name1" required value="<?php
														if (array_key_exists("name1", $_POST))
															echo $_POST["name1"];
														else echo ""
														?>">
        Birthday:
        <input type="number" name="day1" required style="width: 40px;" value="<?php
																				if (array_key_exists("day1", $_POST)) {
																					echo $_POST["day1"];
																				}
																				?>">
        /
        <input type="number" name="month1" required style="width: 40px;" value="<?php
																				if (array_key_exists("month1", $_POST)) {
																					echo $_POST["month1"];
																				}
																				?>">
        /
        <input type="number" name="year1" required style="width: 40px;" value="<?php
																				if (array_key_exists("year1", $_POST)) {
																					echo $_POST["year1"];
																				}
																				?>">
        <br><br><label for="name2">Second full name is:</label>
        <input type="text" name="name2" required value="<?php
														if (array_key_exists("name2", $_POST)) {
															echo $_POST["name2"];
														}
														?>">
        Birthday:
        <input type="number" name="day2" required style="width: 40px;" value="<?php
																				if (array_key_exists("day2", $_POST)) {
																					echo $_POST["day2"];
																				}
																				?>">
        /
        <input type="number" name="month2" required style="width: 40px;" value="<?php
																				if (array_key_exists("month2", $_POST)) {
																					echo $_POST["month2"];
																				}
																				?>">
        /
        <input type="number" name="year2" required style="width: 40px;" value="<?php
																				if (array_key_exists("year2", $_POST)) {
																					echo $_POST["year2"];
																				}
																				?>">
        <br><br>
        <input type="submit" value="Click to submit">
        <input type="reset" value="Click to reset">
    </form>
    <?php

	if (array_key_exists("name1", $_POST) && array_key_exists("name2", $_POST)) {
		$name1 = $_POST["name1"];
		$name2 = $_POST["name2"];
		$day1 = $_POST["day1"];
		$day2 = $_POST["day2"];
		$month1 = $_POST["month1"];
		$month2 = $_POST["month2"];
		$year1 = $_POST["year1"];
		$year2 = $_POST["year2"];
		MainFunc($name1, $name2, $day1, $day2, $month1, $month2, $year1, $year2);
	}
	?>
</body>

</html>