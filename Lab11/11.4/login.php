<?php
session_start();
$userName = '';
$password = '';

if (isset($_POST["UserName"], $_POST["Password"])) {
    $userName = $_POST["UserName"];
    $password = $_POST["Password"];
}
if (isset($userName)) {
    $host = 'localhost:3306';
    $user = 'root';
    $passwd = '';
    $database = 'Lab11';
	$table_name = 'Users';
	$connect = mysqli_connect($host, $user, $passwd, $database);
    $query = "SELECT * FROM `$table_name` WHERE `UserName` = '$userName' AND `Password` = '$password'";
    
    if ($connect) {
        $result = mysqli_query($connect, $query);

        $row = mysqli_fetch_assoc($result);
        if ($row != false) {
			$_SESSION["UserName"] = $userName;
			header("Location: ./welcome.php");
			exit();
        } else {
			$error = "Incorrect username or password";
		}
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="login.component.css">
    <link rel="stylesheet" href="styles.css">
    <script language="javascript">
        function fCommit() {
            if (document.frmLogin.UserName.value == "") {
                alert("UserName must be enter!");
                document.frmLogin.UserName.focus();
                return false;
            }
            return true;
        }

        function fReset() {
            document.frmLogin.UserName.value = "";
            document.frmLogin.Password.value = "";
            document.frmLogin.UserName.focus();
        }
    </script>
</head>

<body>
    <div id="id01">

        <form class="modal-content animate" method="POST" action="<?php echo $_SERVER["PHP_SELF"] ?>" name="frmLogin" onsubmit="return fCommit();">

            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <div class="main-form-content">

						<p class="text-center" style="margin-bottom: 3rem;">Login by entering the information below</p>
						
                        <label for="UserName"></label>
                        <input type="text" placeholder="Username *" name="UserName" value="<?php echo $userName ?>">
                        
                        <label for="psw"></label>
						<input type="password" placeholder="Password *" name="Password">
						
						<div class="error"><?php echo $error;?></div>
                        <div class="row">

                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                <button type="submit" class="login-btn">Login</button>
                            </div>

                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                <button type="reset" class="login-btn" style="background: tomato" onclick="fReset();">Reset</button>

                            </div>

                        </div>

                        <input type="hidden" name="LinkTo" value="<?php echo $linkTo ?>" />

                    </div>
                </div>

            </div>





        </form>
    </div>

</body>
<script src="jquery-3.3.1.min.js" type="text/javascript"></script>
<script src="bootstrap.min.js" type="text/javascript"></script>


</html>