<?php

function lyn_copyright($startYear) {
    $currentYear = date('Y');
    if ($startYear == $currentYear) {
        return "&copy; $currentYear";
    } else {
        $currentYear = date('y');
        return "&copy; $startYear&ndash;$currentYear";
    }
}
