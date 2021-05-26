<?php

$server = 'localhost:3307';
$user = 'root';
$pass = '';
$mydb = 'my_product';
$table_name = 'product';
$conn = mysqli_connect($server, $user, $pass, $mydb);

$q = $_REQUEST["q"];

$sql = "SELECT name, price, sale_price, description, quantity FROM $table_name where name like '%$q%'";

$result_id = mysqli_query($conn, $sql);
if ($result_id) {
    echo '<table border=1>';
    echo '<th>Name<th>Price<th>Sale Price<th>description<th>quantity';
    while ($row = mysqli_fetch_row($result_id)) {
        echo '<tr>';
        foreach ($row as $field) {
            echo "<td>$field</td>";
        }
        echo '</tr>';
    }
} else {
    echo "no results";
}
mysqli_close($conn);