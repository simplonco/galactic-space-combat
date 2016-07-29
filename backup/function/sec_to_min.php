<?php
  function lyn_convertToMinutes($seconds) { //$seconds replaces number of seconds and $sec replaces remainder. 60 is the number of seconds in a minute.
    $sec = $seconds % 60;
    if(function_exists('intdiv')) {
      $min = intdiv($seconds, 60);
    } else {
      $min = ($seconds - $sec) / 60;
    }
    $sec = ($sec < 10) ? '0' . $sec : $sec;
    return "$min:$sec";
  }
  echo lyn_convertToMinutes(547);
?>
