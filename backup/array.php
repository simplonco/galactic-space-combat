<!DOCTYPE html>
<html>
<body>
<?php
$randomString = "Random String";
$arrayForString =explode('', $randomString, 2);
$stringToArray = implode('', $arrayForString);
$partOfString = substr("Random String", 0, 6);
echo $partOfString;


?>
</body>
</html>