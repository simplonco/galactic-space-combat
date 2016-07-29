<!Doctype html>
<html>
<body>
<p>
<?php
$myname = "Dubale";
$partial = substr($myname, 1, 3);
print "$partial";
?>
</p>
<p>
<?php
$uppercase = strtoupper($myname);
print($uppercase);
?>
</p>
<p>
<?php
$lowercase = strtolower($myname);
print($lowercase);
?>
</p>
</body>
</html>
