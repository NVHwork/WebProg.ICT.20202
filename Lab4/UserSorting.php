<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Title Page</title>

    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.3/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>
<?php
$submitted = '';
$sort_type = '';
function user_sort($a, $b)
{

    // smarts is all-important, so sort it first

    if ($b == 'smarts') {

        return 1;
    } else if ($a == 'smarts') {

        return -1;
    }

    return ($a == $b) ? 0 : (($a < $b) ? -1 : 1);
}

$values_unsorted = array(
    'name' => 'Buzz Lightyear',

    'email_address' => 'buzz@starcommand.gal',

    'age' => 32,

    'smarts' => 'some'
);

$values = array(
    'name' => 'Buzz Lightyear',

    'email_address' => 'buzz@starcommand.gal',

    'age' => 32,

    'smarts' => 'some'
);

if (isset($_POST["submitted"], $_POST["sort_type"])) {
    $sort_type = $_POST["sort_type"];
    $submitted = $_POST["submitted"];
    if ($sort_type == 'usort' || $sort_type == 'uksort' || $sort_type == 'uasort') {
        $sort_type($values, 'user_sort');
    } else {
        $sort_type($values);
    }
}

?>
<style>
    .form-group input {
        margin-right: 10px;
    }
</style>

<body>

    <div class="container" style="margin-top:30px">
        <form action="UserSorting.php" method="post">

            <div class="row">

                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <div class="form-group">
                        <input type="radio" name="sort_type" value="sort" <?= (isset($_POST['sort_type']) && $sort_type == 'sort') ? "checked='checked'" : '' ?> /> Standard sort
                    </div>

                    <div class="form-group">
                        <input type="radio" name="sort_type" value="rsort" <?= (isset($_POST['sort_type']) && $sort_type == 'rsort') ? "checked='checked'" : '' ?> /> Reverse sort
                    </div>

                    <div class="form-group">
                        <input type="radio" name="sort_type" value="usort" <?= (isset($_POST['sort_type']) && $sort_type == 'usort') ? "checked='checked'" : '' ?> /> User-defined sort

                    </div>

                </div>

                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <div class="form-group">
                        <input type="radio" name="sort_type" value="ksort" <?= (isset($_POST['sort_type']) && $sort_type == 'ksort') ? "checked='checked'" : '' ?> /> Key sort

                    </div>
                    <div class="form-group">
                        <input type="radio" name="sort_type" value="krsort" <?= (isset($_POST['sort_type']) && $sort_type == 'krsort') ? "checked='checked'" : '' ?> /> Reverse key sort
                    </div>
                    <div class="form-group">
                        <input type="radio" name="sort_type" value="uksort" <?= (isset($_POST['sort_type']) && $sort_type == 'uksort') ? "checked='checked'" : '' ?> /> User-defined key sort
                    </div>
                </div>

                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <div class="form-group">
                        <input type="radio" name="sort_type" value="asort" <?= (isset($_POST['sort_type']) && $sort_type == 'asort') ? "checked='checked'" : '' ?> /> Value sort

                    </div>

                    <div class="form-group">
                        <input type="radio" name="sort_type" value="arsort" <?= (isset($_POST['sort_type']) && $sort_type == 'arsort') ? "checked='checked'" : '' ?> /> Reverse value sort

                    </div>


                    <div class="form-group">
                        <input type="radio" name="sort_type" value="uasort" <?= (isset($_POST['sort_type']) && $sort_type == 'uasort') ? "checked='checked'" : '' ?> /> User-defined value sort

                    </div>

                </div>
            </div>

            <div class="row">
                <p align="center">
                    <input type="submit" class="btn btn-primary" value="Sort" name="submitted" />
                </p>
            </div>

            <div class="row">

                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">


                </div>

                <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
                    <p>
                        Values unsorted (before sort):
                    </p>

                    <ul>

                        <?php

                        foreach ($values_unsorted as $key => $value) { ?>
                            <li><b><?= $key ?></b>: <?= $value ?></li>
                        <?php } ?>

                    </ul>

                </div>


                <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
                    <p>
                        Values <?= $submitted ? "sorted by $sort_type" : "unsorted"; ?>:
                    </p>

                    <ul>
                        <?php
                        foreach ($values as $key => $value) {
                            echo "<li><b>$key</b>: $value</li>";
                        }
                        ?>
                    </ul>
                </div>


            </div>
        </form>


    </div>







    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>

</html>