<html>

<head>
    <title>Square & Cube</title>
</head>

<style>
	body {
		width: 50%;
		margin: auto;
		text-align: center;
	}

	h1 {
		color: red;
	}

	#select {
		margin-left: auto;
		margin-right: auto;
		font-size: 20px;
	}

	#result {
		width: 100%;
		text-align: center;
		border-collapse: collapse;
	}
</style>

<body>
    <h1> Generate Square and cube value</h1>
    <br>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="GET">
   		<?php 
            if (array_key_exists("start", $_GET)) {
                $start = $_GET["start"];
                $end = $_GET["end"];
            } else {
                $start = 0;
                $end = 0;
            }
        ?>

    <table id="select">
        <tr>
            <td>Select start number: </td>
            <td><select name="start">
                <?php 
                    for ($i = 0; $i <= 10; $i++) {
                        if ($start == $i) {
                            print("<option selected>$i</option>");
                        } else {

                            print("<option>$i</option>");
                        }
                    }
                ?>
            </select></td>
        </tr>
        <tr>
            <td>Select end number: </td>
            <td><select name="end">
                <?php 
                    for ($i = 0; $i <= 20; $i++) {
                        if ($end == $i) {
                            print("<option selected>$i</option>");
                        } else {

                            print("<option>$i</option>");
                        }
                    }
                ?>
            </select></td>
        </tr>
        <tr>
            <td align="right"><input type="submit" value="submit"></td>
            <td align="left"><input type="reset" value="reset"></td>
        </tr>
    </table>

	<br>
    <table id="result" border>
        <tr>
            <th>Number</th>
            <th>Square</th>
            <th>Root</th>
        </tr>
        <?php 
            if (array_key_exists("start", $_GET)) {
                $start = $_GET["start"];
                $end = $_GET["end"];
                $i = $start;
                while($i <= $end) {
                    $sqr = $i * $i;
                    $cubed = $i * $i * $i;
                    print( "<tr><td>$i</td><td>$sqr</td><td>$cubed</td></tr>");
                    $i = $i + 1;
                }
            } else {
                $start = 0;
                $end = 0;
            }
        ?>
    </table>


</body>

</html>