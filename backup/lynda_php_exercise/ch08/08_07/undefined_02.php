<?php
$descriptions = [
    'Earth' => 'mostly harmless',
    'Marvin' => 'the paranoid android',
    'Zaphod Beeblebrox' => 'President of the Imperial Galactic Government'
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Undefined constant</title>
    <link rel="stylesheet" href="styles.css" type="text/css">
</head>
<body>
<h1>Undefined Constant</h1>
<p>Marvin is <?= $descriptions[Marvin]; ?>.</p>
</body>
</html>