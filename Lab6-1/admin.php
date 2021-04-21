<!DOCTYPE html>

<head>
    <title>Category Administration</title>
</head>

<body>
    <?php
    $server = 'localhost';
    $user = 'root';
    $pass = '';
    $mydb = 'business_service';
    $table_name = 'categories';
    $connect = mysqli_connect($server, $user, $pass, $mydb);
    if (!$connect) {
        die("Connect $server via $user failed");
    }

    if (isset($_POST['id']) && isset($_POST['title']) && isset($_POST['description'])) {
        if (trim($_POST['id']) == "") {
            print "Missing category ID";
        } elseif (trim($_POST['title']) == "") {
            print "Missing title";
        } else {
            // trim input
            $_POST['id'] = trim($_POST['id']);
            $_POST['title'] = trim($_POST['title']);
            $_POST['description'] = trim($_POST['description']);

            $addQuery = "INSERT INTO $table_name (category_id, title, description) VALUES('" . $_POST['id'] . "','" . $_POST['title'] . "','" . $_POST['description'] . "')";
            $valueAdd = mysqli_query($connect, $addQuery);
            if (!$valueAdd) {
                die("Add category into $table_name failed.");
            }
        }
    }


    $sql = "SELECT category_id, title, description FROM $table_name";
    $value = mysqli_query($connect, $sql);
    if (!$value) {
        die("Query data from categories failed");
    }
    ?>
    <h1>Category Administration</h1>
    <table>
        <tr>
            <th>Cat ID</th>
            <th>Title</th>
            <th>Description</th>
        </tr>
        <?php
        while ($rs = mysqli_fetch_array($value)) {
            print "<tr>";
            print "<td>";
            print $rs['category_id'];
            print "</td>";
            print "<td>";
            print $rs['title'];
            print "</td>";
            print "<td>";
            print $rs['description'];
            print "</td>";
            print "</tr>";
        }
        ?>
        <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
            <tr>
                <td><input type="text" name="id"></td>
                <td><input type="text" name="title"></td>
                <td><input type="text" name="description"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Add Category">
                </td>
            </tr>
        </form>
    </table>
    <br>
</body>

</html>