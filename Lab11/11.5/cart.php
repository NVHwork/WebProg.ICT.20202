<?php
session_start();
require("connection.php");
if (isset($_POST['submit'])) {
	if (isset($_SESSION["cart"]) && !empty($_SESSION["cart"])) {
		foreach ($_POST['quantity'] as $key => $val) {
			if ($val == 0) {
				unset($_SESSION['cart'][$key]);
				if (empty($_SESSION["Cart"])) {
				}
			} else {
				$_SESSION['cart'][$key]['quantity'] = $val;
			}
		}
	}
}
if (isset($_POST['reset']) && !empty($_SESSION["cart"])) {
	foreach ($_POST['quantity'] as $key => $val) {
		unset($_SESSION['cart'][$key]);
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
		<h1>View cart</h1>


		<form method="post" action="<?= $_SERVER["PHP_SELF"] ?>">
			<table align="center" cellspacing="0" class="fixed">
				<tr style="border-bottom: 1px solid black;" class="head">
					<th>Name</th>
					<th>Quantity</th>
					<th>Per item price</th>
					<th>Price</th>
				</tr>

				<?php
				if (isset($_SESSION["cart"]) && !empty($_SESSION["cart"])) {
					$sql = "SELECT * FROM products WHERE id IN (";

					foreach ($_SESSION['cart'] as $id => $value) {
						$sql .= $id . ",";
					}

					$sql = substr($sql, 0, -1) . ") ORDER BY name ASC";
					$query = mysqli_query($connect, $sql);
					$totalprice = 0;
					while ($row = mysqli_fetch_array($query)) {
						$subtotal = $_SESSION['cart'][$row['id']]['quantity'] * $row['price'];
						$totalprice += $subtotal;


				?>
						<tr>
							<td><?php echo $row['name'] ?></td>
							<td><input id="quantity" align="center" type="text" name="quantity[<?php echo $row['id'] ?>]" size="5" value="<?php echo $_SESSION['cart'][$row['id']]['quantity'] ?>" /></td>
							<td>$<?php echo $row['price'] ?>$</td>
							<td><?php echo $_SESSION['cart'][$row['id']]['quantity'] * $row['price'] ?>$</td>
						</tr>
				<?php

					}
				}
				?>

			</table>

			<div align="center" id="total-price">
				<?php
				if (isset($_SESSION["cart"]) && !empty($_SESSION["cart"])) :
				?>
					<tr>
						<td colspan="">Total Price: $<?php echo $totalprice ?></td>
					</tr>
				<?php else : ?>
					<td>Total Price: $0</td>
				<?php endif; ?>
			</div>

			<br />
			<div align="center" >
				<button type="submit" name="submit">Update Cart</button>
				<button type="submit" name="reset">Clear Cart</button>
			</div>

		</form>
		<div align="center" style="margin:25px auto" id="linkto"><a href="index.php" align="center">Go back to home page</a></div>
	</div>
</body>