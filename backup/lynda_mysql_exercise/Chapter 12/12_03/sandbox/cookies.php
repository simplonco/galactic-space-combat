<?php

// REMEMBER: Setting cookies must be before *any* HTML output
//           unless output buffering is turned on.
	$name = "test";
	$value = 45;
	$expire = time() + (60*60*24*7); // add seconds
	setcookie($name, $value, $expire);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>Cookies</title>
	</head>
	<body>

		
	</body>
</html>
