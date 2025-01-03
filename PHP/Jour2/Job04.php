<?php

$issa = 0;

while ($issa < 100){

    if ($issa % 3 == 0 && $issa % 5 == 0 && $issa != 0) {
        echo "caca" . "</br>"; }

    elseif ($issa % 3 == 0 && $issa != 0){
        echo "Fizz" . "</br>";
    }

    elseif ($issa % 5 == 0 && $issa != 0){
        echo "zzzzzz" . "</br>";
    }


        else {
   
   echo "$issa" . "</br>";}

   $issa++;
    }



   ?>

<?php
// la meme chose mais en for 




for ($i = 0; $i < 100; $i++) {

    if ($i % 3 == 0 && $i % 5 == 0 && $i != 0) {
        echo "caca" . "</br>"; 
    }
    elseif ($i % 3 == 0 && $i != 0) {
        echo "Fizz" . "</br>";
    }
    elseif ($i % 5 == 0 && $i != 0) {
        echo "zzzzzz" . "</br>";
    }
    else {
        echo "$i" . "</br>";
    }
}

?>

