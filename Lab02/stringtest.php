<html>

<head>
    <title>PHP String Variables</title>
</head>

<body>
    <?php
    $first_name = "Phuc";
    $middle_name = "Manh";
    $last_name = "Nguyen";
    $full_name_eng = $first_name . " " . $middle_name . " " . $last_name;
    $full_name_vn = "$last_name $middle_name $first_name";
    print("Full name ENG = $full_name_eng <br></br>");
    print("Full name VN = $full_name_vn<br></br>");
    $len = strlen($full_name_vn);
    $lower = strtolower($full_name_vn);
    $upper = strtoupper($full_name_vn);
    print("Lower case : $lower<br></br>");
    print("Upper case : $upper<br></br>");
    print("Length = $len");
    ?>
</body>

</html>