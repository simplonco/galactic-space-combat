<?php
$characters = ['Arthur Dent', 'Ford Prefect', 'Zaphod Beeblebrox', 'Marvin', 'Slartibartfast'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Unexpected end</title>
    <link rel="stylesheet" href="styles.css" type="text/css">
</head>
<body>
<h1>The Hitchhiker's Guide to the Galaxy</h1>
<p>The Hitchhiker's Guide to the Galaxy has a rich cast of weird and wonderful characters, including the following:</p>
<ul>
    <?php
    foreach ($characters as $name) {
        echo "<li>$name</li>";
    }
    ?>
</ul>
<p>I particularly like Slartibartfast, the planet builder from Magrathea who won an award for his work on the fjords of Norway.</p>
</body>
</html>