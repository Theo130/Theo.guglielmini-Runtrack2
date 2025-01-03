<?php
//1) Créer un tableau vide, ajoutez y 20 valeurs aléatoires. Afficher ce tableau


$tableau = [];


for ($i = 0; $i < 20; $i++) {
    $tableau[] = random(1, 100); // Génère un nombre aléatoire entre 1 et 100

    echo $tableau [$i] . "</br>";
}


$minimum = min($tableau);
$maximum = max($tableau);


echo "min " . $minimum . "<br/>";
echo "max " . $maximum . "<br/>";

print_r($tableau);


?>