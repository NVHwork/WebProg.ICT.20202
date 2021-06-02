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
			<table align="center" cellspacing="0" class="fixed">
        		<tr style="border-bottom: 1px solid black;" class="head">
					<th id="cell">Name</th>
					<th id="cell">Description</th>
					<th id="cell">Price</th>
					<th id="cell">Action</th>
				</tr>

				<?php

				$sql = "SELECT * FROM products ORDER BY name ASC";
				$query = mysqli_query($connect, $sql);

				while ($row = mysqli_fetch_array($query)) {

				?>
					<tr>
						<td id="cell"><?php echo $row['name'] ?></td>
						<td ><?php echo $row['description'] ?></td>
						<td id="cell"><?php echo $row['price'] ?>$</td>
						<td id="cell"><a href="index.php?action=add&id=<?php echo $row['id'] ?>">Add to cart</a></td>
					</tr>
				<?php

				}

				?>

			</table>
		</div>
		<!--end of main-->
		<div id="sidebar">
			<div style="margin: 25px auto"></div>
			<hr />
			<div align="center" id="linkto"><a href="cart.php" >Go to cart</a></div>
		</div>
		<!--end of sidebar-->
	</div>
	<!--end container-->
</body>

</html>