<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Challenge: using loops</title>
    <link href="styles.css" rel="stylesheet" type="text/css">
</head>
<body>
<h1>Multiplication Table</h1>
<table>
    <?php
    // Create first row of table headers
    echo '<tr>';
    echo '<th>&nbsp;</th>';
    for ($col = 1; $col <= 12; $col++) :
        echo "<th>$col</th>";
    endfor;
    echo '</tr>';
    // Create remaining rows
    for ($row = 1, $col = 1; $row <= 12; $row++) :
        echo '<tr>';
        // First cell is a table header
        if ($col == 1) {
            echo "<th>$row</th>";
        }
        while ($col <= 12) :
            echo '<td>' . $row * $col++ . '</td>';
        endwhile;
        echo '</tr>';
        // Reset $col at the end of each row
        $col = 1;
    endfor;
    ?>
</table>
</body>
</html>