<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Date Time Processing Exercise</title>
</head>

<body>
    <font color="blue" size="5">Date Time Processing Exercise</font>

    <form action="<?php $_SERVER["PHP_SELF"]; ?>" method="POST">
        <?php
		if (array_key_exists("name", $_POST)) {
			$hour = $_POST["hour"];
			$min = $_POST["min"];
			$sec = $_POST["sec"];
			$day = $_POST["day"];
			$month = $_POST["month"];
			$year = $_POST["year"];
		} else {
			$hour = 0;
			$min = 0;
			$sec = 0;
			$day = 0;
			$month = 0;
			$year = 0;
		}
		?>
        <br>Enter your name and select date and time for the appointment <br>
        <br>Your name: <input type="text" name="name" required value="<?php if (array_key_exists("name", $_POST)) {
																			echo $_POST["name"];
																		} ?>">
        <table width="200" border="0">
            <tbody>
                <tr>
                    <th scope="row">Date</th>
                    <td><select name="day">
                            <?php
							for ($i = 1; $i <= 31; $i++) {
								if ($day == $i) {
									print("<option selected>$i</option>");
								} else {
									print("<option>$i</option>");
								}
							}
							?>
                        </select></td>
                    <td><select name="month">
                            <?php
							for ($i = 1; $i <= 12; $i++) {
								if ($month == $i) {
									print("<option selected>$i</option>");
								} else {
									print("<option>$i</option>");
								}
							}
							?>
                        </select></td>
                    <td><select name="year">
                            <?php
							for ($i = 2000; $i <= 2020; $i++) {
								if ($year == $i) {
									print("<option selected>$i</option>");
								} else {
									print("<option>$i</option>");
								}
							}
							?>
                        </select></td>
                </tr>
                <tr>
                    <th scope="row">Time</th>
                    <td><select name="hour">
                            <?php
							// loop 24 hours
							for ($i = 0; $i <= 23; $i++) {
								if ($hour == $i) {
									print("<option selected>$i</option>");
								} else {
									print("<option>$i</option>");
								}
							}
							?>
                        </select></td>
                    <td><select name="min">
                            <?php
							// loop 60 minutes
							for ($i = 0; $i <= 59; $i++) {
								if ($min == $i) {
									print("<option selected>$i</option>");
								} else {
									print("<option>$i</option>");
								}
							}
							?>
                        </select></td>
                    <td><select name="sec">
                            <?php
							// loop 60 seconds
							for ($i = 0; $i <= 59; $i++) {
								if ($sec == $i) {
									print("<option selected>$i</option>");
								} else {
									print("<option>$i</option>");
								}
							}
							?>
                        </select></td>
                </tr>
                <tr>
                    <td align="right"><input type="submit" value="Submit"></td>
                    <td align="left"><input type="reset" value="Reset"></td>
                </tr>
            </tbody>
        </table>
        <?php
		if (array_key_exists("name", $_POST)) {
			$name = $_POST["name"];
			print("<br>Konnichiwa $name!<br>");
			$MonthFull = array(1, 3, 5, 7, 8, 10, 12);
			$day = substr(str_repeat(0, 2) . $day, -2);
			$month = substr(str_repeat(0, 2) . $month, -2);
			$hour = substr(str_repeat(0, 2) . $hour, -2);
			$min = substr(str_repeat(0, 2) . $min, -2);
			$sec = substr(str_repeat(0, 2) . $sec, -2);
			print("You have an appointment on $hour:$min:$sec at $day/$month/$year<br><br>");
			print("More information");
			print("<br>");
			if ($hour > 12) {
				$hour = $hour - 12;
				$hour = substr(str_repeat(0, 2) . $hour, -2);
				print("In 12 hours, the time and date is $hour:$min:$sec PM, $day/$month/$year");
				print("<br>");
			} else {
				print("In 12 hours, the time and date is $hour:$min:$sec AM, $day/$month/$year");
				print("<br>");
			}
			// validate february in leap year
			if ($month == 2) {
				if ($year % 4 == 0 && $year % 100 != 0) {
					$day_check = 29;
				} elseif ($year % 400 == 0) {
					$day_check = 29;
				} else {
					$day_check = 28;
				}
			} else {
				if (in_array($month, $MonthFull) && $month != 2) {
					$day_check = 31;
				} else {
					$day_check = 30;
				}
			}
			if ($day <= $day_check) print("This month has $day_check days <3");
			else print("This date does not exist =)");
		}
		?>
    </form>
</body>

</html>