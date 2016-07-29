<?php
$descriptions = [
    'Earth' => 'mostly harmless',
    'Marvin' => 'the paranoid android',
    'Zaphod Beeblebrox' => 'President of the Imperial Galactic Government'
];
$characters = ['Arthur Dent', 'Ford Prefect', 'Marvin', 'Zaphod Beeblebrox', 'Slartibartfast'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Undefined index</title>
    <link rel="stylesheet" href="styles.css" type="text/css">
</head>
<body>
<h1>Undefined Index and Offset</h1>
<p>In the revised edition of the Hitchhiker's Guide, Earth is described as <?= $descriptions['earth']; ?>.</p>
<p>One of my favorite characters is <?= $characters[5]; ?>.</p>
</body>
</html>