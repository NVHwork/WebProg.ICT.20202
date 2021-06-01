<?php session_start() ?>
<html>

<head><title> Order Product 2 </title></head>

<body>
	<div>
		<?php 
		$name = $_POST["name"];
		if(isset($_SESSION["name"])) {
			print "Got name = $name from session";
		} else {
			print "name = $name not set from session";
		}
		
		?>
	</div>
</body>
</html>