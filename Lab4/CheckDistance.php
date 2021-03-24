<html>
	<head>
		<title>Distance and Time Calculations</title>
	</head>

	<body>
		<?php
			$cities = array('Dallas' => 803,
							'Toronto' => 435,
							'Boston' => 848,
							'Nashville' => 406,
							'Las Vegas' => 1526,
							'San Francisco' => 1835,
							'Washington, DC' => 595,
							'Miami' => 1189,
							'Pittsburgh' => 409);
			$destination = $_POST['destination'];
			// print (count($destination));
			function calcDriveTime ($ct, $dest) {
				return round( ($ct[$dest] / 60) , 2 );
			}
			function calcWalkTime ($ct, $dest) {
				return round( ($ct[$dest] / 5) , 2 );
			}
		?>
		<table border=5>
			<thead>
				<th>No.</th>
				<th>Destination</th>
				<th>Distance</th>
				<th>Driving time</th>
				<th>Walking time</th>
			</thead>
			<?php
				if (isset($destination)) {
					for ($i = 0; $i < sizeof($destination); $i++) {
						// print $destination[$i]. "<br>";
						$d = $destination[$i];
						print "<tr><td>" . $i+1 . "</td>";
						if (isset($cities[$d])) {
							print "<td>$d</td>";
							print "<td>$cities[$d]</td>";
							print "<td>" . calcDriveTime($cities, $d) . "</td>";
							print "<td>" . calcWalkTime($cities, $d) . "</td></tr>";
						} else {
							print "<td colspan=4>Sorry. No information for $d!</td></tr>";
						}					
					}
				} else {
					print "<tr><td colspan=5>You haven't select anything!</td></tr>";
				}
			?>
		</table>
	</body>
</html>