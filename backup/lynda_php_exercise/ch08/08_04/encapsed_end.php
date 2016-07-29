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
    <title>T_ENCAPSED_AND_WHITESPACE</title>
    <link rel="stylesheet" href="styles.css" type="text/css">
</head>
<body>
<h1>Descriptions</h1>
<p><?php echo "In the revised edition of the Hitchhiker's Guide, Earth is described as {$descriptions['Earth']}"; ?></p>
<p>Marvin, <?php echo $descriptions['Marvin']; ?>, has a brain the size of a planet.</p>
</body>
</html>