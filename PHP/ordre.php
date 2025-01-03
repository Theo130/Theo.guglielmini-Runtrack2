<?php

    $nombres = [5, 13, 9, 12, 8];

    $croissants = [];

    while(count($nombres) != 0) {
        $minimum = min($nombres);

        // Ajout du nombre dans $croissants
        array_push($croissants, $minimum);

        // Suppression du nombre minimum dans $nombre
        $indexSupprimer = array_search($minimum, $nombres);
        unset($nombres[$indexSupprimer]);

        echo "<br/> <br/> <br/> Nombres :";
        print_r($nombres);

        echo "<br/> Croissants :";
        print_r($croissants);

    

    }

?>


<?php

$nombres = [5, 13, 9, 12, 8];

$croissants = [];

while(count($nombres) != 0) {
    $minimum = min($nombres);

    // Ajout du nombre dans $croissants
    array_push($croissants, $minimum);

    // Suppression du nombre minimum dans $nombre
    $indexSupprimer = array_search($minimum, $nombres);
    unset($nombres[$indexSupprimer]);
}

echo "<br/><br/> Croissants :";
print_r($croissants);

?>