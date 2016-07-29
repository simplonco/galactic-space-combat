<?php
$friends = [
    ['first' => 'Jim', 'last' => 'White'],
    ['first' => 'Jane', 'last' => 'White'],
    ['first' => 'Hilary', 'last' => 'Brown'],
    ['first' => 'Harry', 'last' => 'Brown'],
    ['first' => 'Paul', 'last' => 'Green'],
    ['first' => 'Amanda', 'last' => 'Green'],
    ['first' => 'John', 'last' => 'Black'],
    ['first' => 'Diana', 'last' => 'Black']
];
usort($friends, function($a, $b) {
    // PHP 5 doesn't support the spaceship operator.
    // Use a conditional statement instead.
    if ([$a['last'], $a['first']] < [$b['last'], $b['first']]) {
        return -1;
    } elseif ([$a['last'], $a['first']] > [$b['last'], $b['first']]) {
        return 1;
    } else {
        return 0;
    }
});
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Anonymous callback</title>
    <link rel="stylesheet" href="styles.css" type="text/css">
</head>
<body>
<h1>User-Defined Sort</h1>
<ul>
<?php
foreach ($friends as $friend) {
    echo '<li>'. implode(' ', $friend) . '</li>';
}
?>
</ul>
</body>
</html>