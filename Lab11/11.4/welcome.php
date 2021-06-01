<?php session_start(); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Home</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>

<body>
    <h1 class="hello">Hi, <em><?php echo $_SESSION["UserName"];?>. Welcome to the store!</em></h1>
        <br><br><br>
</body>
</html>