<?php

    $variable = "Stephane";

    $taille = strlen($variable);

    for($i = 0; $i < $taille; $i ++) {
        echo "<br/>La lettre : " . $i . " est : " . $variable[$i]; 
    }

?>