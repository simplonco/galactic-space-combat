<!Doctype html>
<html>
<body>
	<p>
		<?php
		$tuber = "Potato";
		print rand(0,3);
		?>
	</p>
	<p>
		<?php
		$name = "Kegnazmach";
		$namLen = strlen($name);
		print substr($name, rand(0,$namLen)-1, 4);
		?>
	</p>
</body>
</html>
