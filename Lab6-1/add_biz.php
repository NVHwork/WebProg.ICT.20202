<!DOCTYPE html>

<head>
    <title>Business Registration</title>
</head>

<body>
    <?php
    $server = 'localhost';
    $user = 'root';
    $pass = '';
    $mydb = 'business_service';
    $cat_table_name = 'categories';
    $business_table_name = 'businesses';
    $biz_cat_table_name = 'biz_categories';
    $connect = mysqli_connect($server, $user, $pass, $mydb);
    if (!$connect) {
        die("Connect $server via $user failed");
    }

    $sql = "SELECT category_id, title, description FROM $cat_table_name";
    $query_cat_sql = mysqli_query($connect, $sql);
    if (!$query_cat_sql) {
        die("Query data from categories failed");
    }

    if (isset($_POST["categories"]) && isset($_POST["name"]) && isset($_POST["address"]) && isset($_POST["city"]) && isset($_POST["telephone"]) && isset($_POST["url"])) {
        if (!empty($_POST["categories"]) && !empty($_POST["name"]) && !empty($_POST["address"]) && !empty($_POST["city"]) && !empty($_POST["telephone"]) && !empty($_POST["url"])) {
            // trim input
            $_POST['name'] = trim($_POST['name']);
            $_POST['address'] = trim($_POST['address']);
            $_POST['city'] = trim($_POST['city']);
            $_POST['telephone'] = trim($_POST['telephone']);
            $_POST['url'] = trim($_POST['url']);

            // check if telephone 

            // add new business
            $sql = "INSERT INTO $business_table_name (name, address, city, telephone, url) VALUES('" . $_POST['name'] . "','" . $_POST['address'] . "','" . $_POST['city'] . "','" . $_POST['telephone'] . "','" . $_POST['url'] . "')";
            $insert_bus_sql = mysqli_query($connect, $sql);
            if (!$insert_bus_sql) {
                die("Insert business into $business_table_name failed.");
            } else {
                $idSQL = mysqli_insert_id($connect);
                foreach ($_POST["categories"] as $selected) {
                    // insert new relationship cat & business
                    $sql = "INSERT INTO $biz_cat_table_name (business_id, category_id) VALUES('$idSQL','$selected')";
                    $insert_biz_cat_sql = mysqli_query($connect, $sql);
                    if (!$insert_biz_cat_sql) {
                        die("Insert category into $biz_cat_table_name failed");
                    }
                }
            }
        } else {
            echo "<p style='color:red'>Please select at least one category / insert name, address, city, telephone, url</p>";
        }
    } else {
        if (isset($_POST["categories"]) && empty($_POST["categories"])) {
            echo "<p style='color:red'>Please select at least one category";
        }
    }
    ?>

    <body>
        <h2>Business Registration</h2>
        <br><br>
        <div>
            <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
                <div id="left" class="float">
                    <label for="category-select">
                        <?php
                        if (!isset($insert_bus_sql)) {
                            echo 'Click on one, or control-click on multiple categories:';
                        } else {
                            echo 'Record inserted as shown below';
                        } ?></label><br>
                    <select name="categories[]" id="categories" multiple>
                        <?php
                        if (!isset($insert_bus_sql)) {
                            while ($result = mysqli_fetch_array($query_cat_sql)) {
                                echo "<option value='" . $result['category_id'] . "'>" . $result['title'] . "</option>";
                            }
                        } else {
                            foreach ($_POST["categories"] as $selected) {
                                $sql = "SELECT title FROM $cat_table_name WHERE category_id = '" . $selected . "'";
                                $v2 = mysqli_query($connect, $sql);
                                $rs2 = mysqli_fetch_array($v2);
                                echo "<option value='" . $rs2['title'] . "' disabled>" . $rs2['title'] . "</option>";
                            }
                        }
                        ?>
                    </select>
                    <br><br>

                </div>

                <div id="right" class="float">
                    <table>
                        <tr>
                            <td>Business Name:</td>
                            <td><input type="text" name="name" id="name" value="<?php if (isset($insert_bus_sql)) {
                                                                                    echo $_POST['name'];
                                                                                } ?>"></td>
                        </tr>
                        <tr>
                            <td>Address:</td>
                            <td><input type="text" name="address" id="address" value="<?php if (isset($insert_bus_sql)) {
                                                                                            echo $_POST['address'];
                                                                                        } ?>"></td>
                        </tr>
                        <tr>
                            <td>City:</td>
                            <td><input type="text" name="city" id="city" value="<?php if (isset($insert_bus_sql)) {
                                                                                    echo $_POST['city'];
                                                                                } ?>"></td>
                        </tr>
                        <tr>
                            <td>Telephone:</td>
                            <td><input type="text" name="telephone" id="telephone" value="<?php if (isset($insert_bus_sql)) {
                                                                                                echo $_POST['telephone'];
                                                                                            } ?>"></td>
                        </tr>
                        <tr>
                            <td>URL:</td>
                            <td><input type="text" name="url" id="url" value="<?php if (isset($insert_bus_sql)) {
                                                                                    echo $_POST['url'];
                                                                                } ?>"></td>
                        </tr>
                    </table>
                </div>
                <?php
                if (isset($insert_bus_sql)) {
                    echo '<input type="submit" name="submit" value="Add Another Business" onclick="window.location.reload(true);">';
                } else {
                    echo '<input type="submit" name="submit" value="Add Business">';
                }
                ?>

            </form>
        </div>
    </body>

    </html>