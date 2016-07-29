<?php
ini_set('display_errors', '1');
$characters = ['Arthur Dent', 'Ford Prefect', 'Zaphod Beeblebrox', 'Marvin, 'Slartibartfast'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Using a for loop</title>
    <link rel="stylesheet" href="styles.css" type="text/css">
    <style>
    body {
        background-color: #fff;
    }
    </style>
</head>
<body>
<h1>Main Characters</h1>
<ul>
    <?php
    for ($i = count($characters) - 1; $i >= 0; $i--) {
        echo '<li>' . $characters[$i] . '</li>';
    }
    ?>
</ul>
</body>
</html>