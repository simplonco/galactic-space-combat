<?php
$characters = [
    'Arthur Dent',
    'Zaphod Beeblebrox',
    'Marvin',
    'Slartibartfast',
    'Ford Prefect'];
rsort($characters);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sorting an array</title>
    <link rel="stylesheet" href="../../ch07/07_02/styles.css" type="text/css">
</head>
<body>
<h1>Main Characters</h1>
<ul>
    <?php
    foreach ($characters as $name) {
        echo "<li>$name</li>";
    }
    ?>
</ul>
</body>
</html>