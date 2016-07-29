<?php

echo lyn_convertToMinutes(605);

function lyn_convertToMinutes($seconds) {
    $sec = $seconds % 60;
    if (function_exists('intdiv')) {
        $min = intdiv($seconds, 60);
    } else {
        $min = ($seconds - $sec) / 60;
    }
    $sec = abs($sec);
    $sec = ($sec < 10) ? '0' . $sec : $sec;
    return "$min:$sec";
}

