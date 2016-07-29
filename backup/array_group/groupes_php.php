<?php
$apprenants = ["adora", "mohamad", "berivan", "amare", "zaidi", "suliman", "antoine", "chadi"];

shuffle($apprenants);

for ($i = 0; $i < count($apprenants); $i = $i + 3) {
    echo $apprenants[$i]." ".$apprenants[$i+1]." ".$apprenants[$i+2].'<br />';
}
?>
