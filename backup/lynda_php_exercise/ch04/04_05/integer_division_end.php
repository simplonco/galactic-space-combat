<?php
// Convert $total_minutes to hours and minutes.

$total_minutes = 640;
$minutes = $total_minutes % 60;
//$hours = ($total_minutes - $minutes) / 60;
$hours = intdiv($total_minutes, 60);

echo "Time taken was $hours hours $minutes minutes";
