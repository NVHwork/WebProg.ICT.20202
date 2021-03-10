<html>

<head>
    <title>Exercise 2.9</title>
</head>

<body>
    <font size=5 color="Red"> Your Information </font>
    <?php
    $name = $_POST["name"];
    $gender = $_POST["gender"];
    $phone = $_POST["phone"];
    $dob = $_POST["dob"];
    $uni = $_POST["uni"];
    $class = $_POST["class"];
    $level = $_POST["level"];
    $hobby = $_POST["hobby"];
    $sid = $_POST["sid"];
    $social  = $_POST["social"];
    print "<br><br>Name : $name";
    print "&nbsp &nbsp Gender : $gender<br><br>";
    print "Date of birth : $dob<br><br>";
    print "Student's ID : $sid<br><br>";
    print "Phone : $phone<br><br>";
    print "Class : $class, $uni <br><br>";
    print "Hobby :";
    if (!empty($hobby)) {
        print "<ul>";
        foreach ($hobby as $hb) {
            print "<li>$hb</li>";
        }
        print "</ul>";
    }
    if (strlen($social) != 0) {
        print "<br>Social media link : $social";
    }
    ?>
</body>

</html>