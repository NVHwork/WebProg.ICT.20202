<?php
session_start();
require("connection.php");
if (isset($_GET['action']) && $_GET['action'] == "add") {

	$id = intval($_GET['id']);

	if (isset($_SESSION['cart'][$id])) {

		$_SESSION['cart'][$id]['quantity']++;
	} else {

		$sql_s = "SELECT * FROM products
				WHERE id={$id}";
		$query_s = mysqli_query($connect, $sql_s);
		if (mysqli_num_rows($query_s) != 0) {
			$row_s = mysqli_fetch_array($query_s);

			$_SESSION['cart'][$row_s['id']] = array(
				"quantity" => 1,
				"price" => $row_s['price']
			);
		} else {

			$message = "This product id it's invalid!";
		}
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="css/reset.css" />
	<link rel="stylesheet" href="css/style.css" />

	<title>Products</title>


</head>

<body>

	<div id="container">
		<div id="main">
			<h1>Product List</h1>
			<?php
			if (isset($message)) {
				echo "<h2>$message</h2>";
			}
			?>
			<table>
				<tr>
					<th>Name</th>
					<th>Description</th>
					<th>Price</th>
					<th>Action</th>
				</tr>

				<?php

				$sql = "SELECT * FROM products ORDER BY name ASC";
				$query = mysqli_query($connect, $sql);

				while ($row = mysqli_fetch_array($query)) {

				?>
					<tr>
						<td><?php echo $row['name'] ?></td>
						<td><?php echo $row['description'] ?></td>
						<td><?php echo $row['price'] ?>$</td>
						<td><a href="index.php?action=add&id=<?php echo $row['id'] ?>">Add to cart</a></td>
					</tr>
				<?php

				}

				?>

			</table>
		</div>
		<!--end of main-->
		<div id="sidebar">
			<h1>Cart</h1>
			<hr />
			<a href="cart.php">Go to cart</a>
		</div>
		<!--end of sidebar-->
	</div>
	<!--end container-->
</body>

</html>