<?php
  $string = file_get_contents("dictionnaire.txt", FILE_USE_INCLUDE_PATH);
  $dico = explode("\n", $string);
  echo $dico;
?>
