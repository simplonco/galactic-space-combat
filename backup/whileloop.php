<!DOCTYPE html>
<html>
<body>
<?php

$secret_password = "pizza";
$entered_password = "pizza";
while ($secret_password != $entered_password) {
	echo "Re-entered your password";
	# code...
}
echo "password is correct!";
?>
</body>
</html>

<!DOCTYPE html>
<html>
<body>
<?php

$num = 0;
while ($num < 10) {
	echo "The number is ". $num. '<br>';
	$num = $num + 1;
	
}

#another example below:
$counter = 1;
while ($counter <= 10) {
	echo "this is sheet.";
}
?>
</body>
</html>