<?php

    include("presentation.php");

    presentation("Théo", "de Grasse");
    echo "<br/>";
    presentation("Laurent", "d'Auribeau");
    echo "<br/>";
    presentation("Gaëlick", "de Mandelieu");

    echo "<br/><br/>";
    $valeurRetour1 = addition(8, 6);
    $valeurRetour2 = addition($valeurRetour1, 1);
    echo $valeurRetour1 . "<br/>" . $valeurRetour2;

?>