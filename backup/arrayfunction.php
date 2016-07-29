<!Doctype html>
<html>
<body>
	<?php
	$footclub = array();
    array_push($footclub, "Ac Milan");
    array_push($footclub, "Barcelona");
    array_push($footclub, "Paris Saintgermain");
    array_push($footclub, "Arsenal");
    array_push($footclub, "Bayermunich");
    print count($footclub);
	?>
	</p>
</body>
</html>


<!Doctype html>
<html>
<body>
<?php
#this example from codecademy and it is in array function II.
    $families = array();
    array_push($families, "Yayne");
    array_push($families, "Tesfu");
    array_push($families, "Teddy");
    array_push($families, "Askale");
    array_push($families, "Etabez");
    array_push($families, "Werkitu");
    array_push($families, "Debrie");
    array_push($families, "Alemie");
    $count = count($families);
    $sort = sort($families)-1;
    $rand = rand($count,$sort);
    $winner = $families[$rand];
    $thewinner = strtoupper("$winner");
    print $thewinner;
    ?>
</body>
</html>