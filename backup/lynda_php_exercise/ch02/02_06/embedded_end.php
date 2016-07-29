<?php
$book = '"The Hitchhiker\'s Guide to the Galaxy"';
$author = 'Douglas Adams';
$answer = 42;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Embedded PHP</title>
    <link href="styles.css" rel="stylesheet" type="text/css">
</head>
<body>
<h1>Dynamic Text In Action</h1>
<p>There's no need for everything in a PHP file to be stored in variables and displayed using echo. PHP code is designed to be embedded in HTML.</p>
<p><mark><?= $book; ?></mark> is a comedy sci-fi series originally written for radio by <mark><?php echo $author; ?></mark>, and subsequently turned into a book, TV series, movie, and numerous stage shows. It reveals that the Answer to the Ultimate Question of Life, the Universe, and Everything is <mark><?php echo $answer; ?></mark>.</p>
</body>
</html>