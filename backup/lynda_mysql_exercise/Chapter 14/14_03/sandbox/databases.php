<?php
  // 1. Create a database connection
  $dbhost = "localhost";
  $dbuser = "widget_cms";
  $dbpass = "secretpassword";
  $dbname = "widget_corp";
  $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
  // Test if connection occurred.
  if(mysqli_connect_errno()) {
    die("Database connection failed: " . 
         mysqli_connect_error() . 
         " (" . mysqli_connect_errno() . ")"
    );
  }

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>Databases</title>
	</head>
	<body>

	</body>
</html>

<?php
  // 5. Close database connection
  mysqli_close($connection);
?>