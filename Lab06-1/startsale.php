<html>
	<head>
		<title>Inventory Management</title>
	</head>

	<body>
		<h1>Select a product that has just been sold</h1><hr>
		<form action="sale.php" method="post">
			<?php
				$server = 'localhost';
				$user = 'root';
				$pass = '';
				$mydb = 'sale';
				$table_name = 'Products';
				$connect = mysqli_connect($server, $user, $pass, $mydb);

				$query = "SELECT Product_Desc FROM $table_name";
				$result_id = mysqli_query($connect, $query);
				if ($result_id) {
					while ($row = mysqli_fetch_row($result_id)) {
						foreach ($row as $field) {
							print ('<input type="radio" name="Product" value="' . $field . '">'. $field . '<br>');
						}
					}
				} else {
					die ("Query = $query failed!");
				}
				mysqli_close($connect);
			?>
			<button type="submit">Submit</button>
			<button type="reset">Reset</button>
		</form>
	</body>
</html>