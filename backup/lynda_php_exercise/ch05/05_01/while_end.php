<?php
// initialize counter
$i = 0;

while ($i < 10) {
    // increment counter
    $i++;
    if ($i % 2) {
        continue;
    }
    echo $i . '<br>';
    /*if ($i == 6) {
        break;
    }*/
}
