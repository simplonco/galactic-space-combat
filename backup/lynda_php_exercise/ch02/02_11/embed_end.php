<?php
$book = [
    'title' => "The Hitchhiker's Guide to the Galaxy",
    'author' => 'Douglas Adams',
    'description' => 'a comedy sci-fi adventure originally based on a BBC radio series'
];
$characters = [
    'Arthur Dent',
    'Ford Prefect',
    'Zaphod Beeblebrox',
    'Marvin, the paranoid android',
    'Slartibartfast'
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Challenge: Embed in HTML</title>
    <link href="styles.css" rel="stylesheet" type="text/css">
</head>
<body>
<h1><?= "{$book['title']} by {$book['author']}"; ?></h1>
<p><?= '"' . $book['title'] . '" is ' . $book['description']; ?>.</p>
<h2>Main Characters</h2>
<ul>
    <li><?= $characters[0]; ?></li>
    <li><?= $characters[1]; ?></li>
    <li><?= $characters[2]; ?></li>
    <li><?= $characters[3]; ?></li>
    <li><?= $characters[4]; ?></li>
</ul>
</body>
</html>
