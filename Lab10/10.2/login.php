<?php

$linkTo = '';
$userName = '';
$password = '';

if (isset($_POST["UserName"], $_REQUEST["LinkTo"], $_POST["Password"])) {
    $linkTo = $_REQUEST["LinkTo"];
    $userName = $_POST["UserName"];
    $password = $_POST["Password"];
}
if (isset($userName)) {
    $host = 'localhost:3307';
    $user = 'root';
    $passwd = '';
    $database = 'lab_12';
    $table_name = 'users';
    $query = "SELECT * FROM $table_name WHERE user_name = '$userName' AND password = '$password'";
    $connect = mysqli_connect($host, $user, $passwd, $database);

    if ($connect) {
        $result = mysqli_query($connect, $query);

        $row = mysqli_fetch_row($result);
        if ($result && $row) {
            if ($linkTo != "") {
                header("Location: " . $linkTo);
            } else {
                header("Location: http://www.google.com");
                exit();
            }
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
    <title>Admin | Login</title>
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


                        <h5 class="text-center">Welcome back, Admin! </h5>
                        <p class="text-center" style="margin-bottom: 3rem;">Login by entering the information below</p>
                        <?php
                        if (isset($user) && !$row) {
                            echo '
                                        <div class="alert alert-danger" style="margin-bottom: 0;">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            Invalid name and/or password!
                        </div>
                                        ';
                        }
                        mysqli_free_result($result);
                        mysqli_close($connect);
                        ?>
                        <label for="UserName"></label>
                        <input type="text" placeholder="Username *" name="UserName" value="<?php echo $userName ?>">
                        <input type="hidden" name="LinkTo" value="<?php echo $linkTo ?>">
                        <!-- <div *ngIf="submitted && f.email.errors">
            <small *ngIf="f.email.errors.required" class="required-error">Email is required</small>
            <small *ngIf="f.email.errors.email" class="invalid-error">Email is invalid</small>
        </div> -->

                        <label for="psw"></label>
                        <input type="password" placeholder="Password *" name="Password">
                        <!-- <div *ngIf=" submitted && f.password.errors">
            <small *ngIf="f.password.errors.required" class="required-error">Password is required</small>
        </div> -->




                        <!-- <button type="button" onclick="document.getElementById('id01').style.display='none'"
            class="cancelbtn">Cancel</button> -->

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