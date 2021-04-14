<html>
	<head>
		<title>Insert Results</title>
	</head>

	<body>
		<?php
			$server = 'localhost';
			$user = 'root';
			$pass = '';
			$mydb = 'sale';
			$table_name = 'Products';
			$connect = mysqli_connect($server, $user, $pass, $mydb);

			if (isset($_POST["Item"]) && isset($_POST["Cost"]) && isset($_POST["Weight"]) && isset($_POST["Quantity"])) {
				$Item = $_POST["Item"];
				$Cost = $_POST["Cost"];
				$Weight = $_POST["Weight"];
				$Quantity = $_POST["Quantity"];
				if (is_numeric($Cost) && is_numeric($Weight) && is_numeric($Quantity)) {
					$query = "INSERT INTO $table_name VALUES
								('0', '$Item', '$Cost', '$Weight', '$Quantity')";
					
					print "The Query is <i>$query</i><br>";
					print '<br><font size="4" color="blue">';
					if (mysqli_query($connect, $query)) {
						print "Insert into $mydb was successful!</font>";
					} else {
						print "Insert into $mydb failed!</font>";
					}
				} else {
					print "Weight, Cost and Number Available must be numeric!";
				}
			} else {
				print "You must input all fields!!!";
			}
			mysqli_close($connect);
		?>
	</body>
</html>