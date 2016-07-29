<!Doctype html>
<html>
<body>
	<?php
	$string = file_get_contents("dictionnaire.txt", FILE_USE_INCLUDE_PATH);
	$dico = explode("\n", $string);
	print_r(str_word_count($string));
	echo str_word_count($string);
	?>

</body>
</html>