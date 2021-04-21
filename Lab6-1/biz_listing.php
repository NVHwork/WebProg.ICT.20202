<!DOCTYPE html>

<head>
    <title>Business Listings</title>
    <style>
    table,
    th,
    td {
        border: 1px solid black;
    }
    </style>
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

    $sql = "SELECT category_id, title FROM $cat_table_name";
    $query_cat_sql = mysqli_query($connect, $sql);
    if (!$query_cat_sql) {
        die("Query data from categories failed");
    }

    $sql = "
    SELECT $business_table_name.*, $biz_cat_table_name.category_id 
    FROM $business_table_name 
    RIGHT OUTER JOIN $biz_cat_table_name 
    ON $business_table_name.business_id = $biz_cat_table_name.business_id
    UNION
    SELECT $business_table_name.*, $biz_cat_table_name.category_id
    FROM $business_table_name 
    LEFT OUTER JOIN $biz_cat_table_name 
    ON $business_table_name.business_id = $biz_cat_table_name.business_id
            ";
    $join_sql = mysqli_query($connect, $sql);
    if (!$join_sql) {
        die("Failed to join 2 tables: $business_table_name and $biz_cat_table_name!");
    }
    ?>


    <h1>Business Listings</h1>
    <table>
        <tr>
            <th>Click on a category to find bussiness listings:
            </th>
        </tr>
        <?php
        while ($rs = mysqli_fetch_array($query_cat_sql)) {
            print "<tr>";
            print "<td>";
            print '<a href="' . $_SERVER["PHP_SELF"] . '?cat_id=' . $rs['category_id'] . '">' . $rs['title'] . '</a>';
            print "</td>";
            print "</tr>";
        }
        ?>
    </table>
    <br>
    <table class="right">
        <tr>
            <td>Bussiness ID</td>
            <td>Business Name</td>
            <td>Address</td>
            <td>City</td>
            <td>Telephone</td>
            <td>URL</td>
            <td>Biz_Cat ID</td>
            <td>Category ID</td>
        </tr>
        <?php
        if (isset($_GET['cat_id'])) {
            $cat_id = $_GET['cat_id'];
            $buz_id = 0;
            while ($rs = mysqli_fetch_array($join_sql)) {
                $buz_id++;
                if (trim($rs['category_id']) == trim($cat_id)) {
                    print "<tr><td>" . $rs['business_id'] . "</td>";
                    print "<td>" . $rs['name'] . "</td>";
                    print "<td>" . $rs['address'] . "</td>";
                    print "<td>" . $rs['city'] . "</td>";
                    print "<td>" . $rs['telephone'] . "</td>";
                    print "<td>" . $rs['url'] . "</td>";
                    print "<td>" . $buz_id . "</td>";
                    print "<td>" . $rs['category_id'] . "</td>" . "</tr>";
                }
            }
        }
        ?>
    </table>
</body>

</html>