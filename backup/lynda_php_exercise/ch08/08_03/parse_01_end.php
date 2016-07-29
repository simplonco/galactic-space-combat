<?php
$name = 'Arthur Dent';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Unexpected brace</title>
    <link rel="stylesheet" href="styles.css" type="text/css">
</head>
<body>
<h1>Notable Quotes</h1>
<?php
if ($name == 'Arthur Dent') {
    echo '<p>I could never get the hang of Thursdays.</p>';
} elseif ($name == 'Marvin') {
    echo "<p>I've got this terrible pain in all the diodes down my left-hand side.</p>";
} else {
    echo '<p>Is that really a piece of fairy cake?</p>';
}
?>
</body>
</html>