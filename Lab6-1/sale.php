<html>
	<head>
		<title>Product Update Results</title>
	</head>

	<body>
		<?php
			$server = 'localhost';
			$user = 'root';
			$pass = '';
			$mydb = 'sale';
			$table_name = 'Products';
			$connect = mysqli_connect($server, $user, $pass, $mydb);

			print "<h1>Update Results for table $table_name</h1><hr>";

			if (isset($_POST["Product"])) {
				$product = $_POST["Product"];
			} else {
				$product = '';
			}
			$query = "UPDATE $table_name 
						SET Number = Number-1
						WHERE (Product_Desc = '$product')";
			print "The query is <i>$query</i><br><br>";

			$result_id = mysqli_query($connect, $query);
			if ($result_id) {
				show_all($connect, $table_name);
			} else {
				die ("Update = $query failed!");
			}
			mysqli_close($connect);

			function show_all($connect, $table_name) {
				$query = "SELECT * FROM $table_name";
				$result_id = mysqli_query($connect, $query);
				print '<table border=1><th>Num</th>
						<th>Product</th><th>Cost</th>
						<th>Weight</th><th>Count</th>';
				while ($row = mysqli_fetch_row($result_id)) {
					print '<tr>';
					foreach ($row as $field) {
						print "<td>$field</td>";
					}
					print '</tr>';
				}
			}
		?>
	</body>
</html>