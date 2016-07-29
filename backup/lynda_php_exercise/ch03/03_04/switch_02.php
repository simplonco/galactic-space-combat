<?php
$total = 155.99;
$delivery = 10;

switch($total) {
    case < 50:
        echo 'Total (including delivery): ' . $total += $delivery;
        break;
    case < 100:
        echo 'Total (including delivery): ' . $total += $delivery/2;
        break;
    case >= 100:
        echo 'Total (free delivery): ' . $total;

}
