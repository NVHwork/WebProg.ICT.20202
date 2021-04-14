<html>
	<head>
		<title>Table Output</title>
	</head>

	<body>
		<?php
			$server = 'localhost';
			$user = 'root';
			$pass = '';
			$mydb = 'sale';
			$table_name = 'Products';
			$connect = mysqli_connect($server, $user, $pass, $mydb);

			print "<h1>$table_name Data</h1><hr>";

			$search = $_POST["Search"];
			$query = "SELECT * FROM $table_name WHERE (Product_Desc = '$search')";
			print "The query is <i>$query</i><br>";

			$result_id = mysqli_query($connect, $query);
			if ($result_id) {
				print '<table border=1>';
				print '<th>Num<th>Product<th>Cost<th>Weight<th>Count';
				while ($row = mysqli_fetch_row($result_id)) {
					print '<tr>';
					foreach ($row as $field) {
						print "<td>$field</td>";
					}
					print '</tr>';
				}
			} else {
				die ("Query = $query failed!");
			}
			mysqli_close($connect);
		?>
	</body>
</html>