<?php

    $notes = array(19, 17, 0);
    print_r($notes); // Array ( [0] => 20 [1] => 17 [2] => 0 )

    array_push($notes, 18, 15, 17);
    echo "<br/>";
    print_r($notes); // Array ( [0] => 20 [1] => 17 [2] => 0 [3] => 18 [4] => 15 )

    echo "<br/>";
    $notes[4] = 16; // ECRITURE de la nouvelle note
    echo $notes[4]; // LECTURE de la valeur
    $taille = count($notes); // Taille du tableau, ici 6

    for($i = 0; $i < $taille; $i += 1) {
        echo "<br/> À l'indice " . $i . ", la note n°" . ($i + 1) . " est " . $notes[$i];
    }


?>