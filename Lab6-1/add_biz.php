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
    $business_table_name = 'businesses';
    $biz_cat_table_name = 'biz_categories';
    $connect = mysqli_connect($server, $user, $pass, $mydb);
    if (!$connect) {
        die("Connect $server via $user failed");
    }

    $sql = "SELECT category_id, title, description FROM $table_name";
    $value = mysqli_query($connect, $sql);
    if (!$value) {
        die("Query data from categories failed");
    }

    if (isset($_POST["name"])) {
        if (!empty($_POST["categories"])) {

            $sql = "INSERT INTO $business_table_name (name, address, city, telephone, url) VALUES('" . $_POST['name'] . "','" . $_POST['address'] . "','" . $_POST['city'] . "','" . $_POST['telephone'] . "','" . $_POST['url'] . "')";
            $value2 = mysqli_query($connect, $sql);
            if (!$value2) {
                die("Insert business into $business_table_name failed.");
            } else {
                //Insert new entry to biz_categories table
                $idSQL = mysqli_insert_id($connect);
                foreach ($_POST["categories"] as $selected) {
                    $sql = "INSERT INTO $biz_cat_table_name (business_id, category_id) VALUES('$idSQL','$selected')";
                    $value3 = mysqli_query($connect, $sql);
                    if (!$value3) {
                        die("Insert category into $biz_cat_table_name failed");
                    }
                }
            }
        } else {
            echo "<p style='color:red'>Please select the value</p>";
        }
    }
    ?>

    <body>
        <h2>Business Registration</h2>
        <br><br>

        <div>
            <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
                <div id="left" class="float">
                    <label for="category-select">Click on one, or control-click on multiple categories:</label><br>
                    <select name="categories[]" id="categories" multiple>
                        <?php
                        while ($result = mysqli_fetch_array($value)) {
                            echo "<option value='" . $result['category_id'] . "'>" . $result['title'] . "</option>";
                        }
                        ?>
                    </select>
                    <br><br>

                </div>

                <div id="right" class="float">
                    <table>
                        <tr>
                            <td>Business Name:</td>
                            <td><input type="text" name="name" id="name"
                                    value="<?php if (isset($_POST["name"])) echo $_POST["name"]; ?>"></td>
                        </tr>
                        <tr>
                            <td>Address:</td>
                            <td><input type="text" name="address" id="address"></td>
                        </tr>
                        <tr>
                            <td>City:</td>
                            <td><input type="text" name="city" id="city"></td>
                        </tr>
                        <tr>
                            <td>Telephone:</td>
                            <td><input type="text" name="telephone" id="telephone"></td>
                        </tr>
                        <tr>
                            <td>URL:</td>
                            <td><input type="text" name="url" id="url"></td>
                        </tr>
                    </table>
                </div>
                <?php
                // if (isset($_POST["name"])) {
                //     echo '<button value="Add Another Business" onclick="window.location.reload(true);">';
                // } else {

                // }
                echo '<input type="submit" name="submit" value="Add Business">';
                ?>

            </form>
        </div>

        <div id="result">
            <?php
            if (isset($value2)) {
                echo "<h2 style='color:red'>Record inserted as shown below!</h2><br>";
                echo "<h3>Information:</h3><br>";
                echo "<table>
                    <tr>
                        <td>Name:</td>
                        <td>$_POST[name]</td>
                    </tr>
                    <tr>
                        <td>Address:</td>
                        <td>$_POST[address]</td>
                    </tr>
                    <tr>
                        <td>City:</td>
                        <td>$_POST[city]</td>
                    </tr>
                    <tr>
                        <td>Telephone:</td>
                        <td>$_POST[telephone]</td>
                    </tr>
                    <tr>
                        <td>URL:</td>
                        <td>$_POST[url]</td>
                    </tr>
                    <tr>
                        <td>Categories:</td>
                        <td>";
                foreach ($_POST["categories"] as $selected) {
                    $sql = "SELECT title FROM categories WHERE category_id = '" . $selected . "'";
                    $value2 = mysqli_query($connect, $sql);
                    $result2 = mysqli_fetch_array($value2);
                    echo $result2['title'] . "<br>";
                }
                echo "</td>
                    </tr>
                </table>";
            }
            ?>
        </div>
    </body>

    </html>