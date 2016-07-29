<!DOCTYPE html>
<html>
<body>
<?php
$numberOfOranges = 4;
$numberOfBananas = 36;
if (($numberOfOranges > 25) && ($numberOfBananas > 30)) {
	echo '25% Discount';
}
elseif (($numberOfOranges > 30) || ($numberOfBananas > 35)) {
	echo '15% Discount';
}
else {
	echo 'No Discount';
}


?>
</body>
</html>