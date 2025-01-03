<?php
$i = 0;

while ( $i <= 1337){
    if ($i === 42){
    echo "<b><u>" . $i . "</b></u><br>";}
    if ($i == 10 || $i == 12 ){
        echo "</br>";
    }
   else {
    echo "$i" . "</br>";}
$i++;
}


?>