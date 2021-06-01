<?php
session_start();
require("connection.php");
if(empty($_SESSION["Cart"])) {
	$info = "Cart is empty";
}
if (isset($_POST['submit'])) {
	$info = "";
	if(isset($_SESSION["cart"]) && !empty($_SESSION["cart"])) {
		foreach ($_POST['quantity'] as $key => $val) {
			if ($val == 0) {
				unset($_SESSION['cart'][$key]);
			} else {
				$_SESSION['cart'][$key]['quantity'] = $val;
			}
		}
	}
	if(empty($_SESSION["Cart"])) {
		$info = "Cart is empty";
	}
}
if (isset($_POST['reset']) && !empty($_SESSION["cart"])) {

	foreach ($_POST['quantity'] as $key => $val) {
		unset($_SESSION['cart'][$key]);
		$info = "Cart is empty";
	}
}

?>

<h1>View cart</h1>
<a href="index.php">Go back to home page</a>
<form method="post" action="<?= $_SERVER["PHP_SELF"] ?>">

	<?php if (isset($info)) : ?>
		<div name="info"><?php echo $info; ?></div>
	<?php endif; ?>
	<table>

		<tr>
			<th>Name</th>
			<th>Quantity</th>
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
					<td><input type="text" name="quantity[<?php echo $row['id'] ?>]" size="5" value="<?php echo $_SESSION['cart'][$row['id']]['quantity'] ?>" /></td>
					<td>$<?php echo $row['price'] ?>$</td>
					<td><?php echo $_SESSION['cart'][$row['id']]['quantity'] * $row['price'] ?>$</td>
				</tr>
		<?php

			}
		}
		?>
		<?php
		if (isset($_SESSION["cart"]) && !empty($_SESSION["cart"])):
		?>
		<tr>
			<td>Total Price: $<?php echo $totalprice ?></td>
		</tr>
		<?php else : ?>
			<td>Total Price: $0</td>
		<?php endif;?>
	</table>
	<br />
	<button type="submit" name="submit">Update Cart</button>
	<button type="submit" name="reset">Clear Cart</button>

</form>