<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>First Page</title>
	</head>
	<body>
		
		<?php $link_name = "Second Page"; ?>
		<?php $id = 2; ?>
		
		<a href="second_page.php?id=<?php echo $id; ?>"><?php echo $link_name; ?></a>

	</body>
</html>
