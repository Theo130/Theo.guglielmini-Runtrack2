<?php

$euro = 53;
$dollar = eurodol($euro);

function eurodol($euro1) {
    $tauxfixe = 1.1;

    $dollar = $euro1 * $tauxfixe;

    return $dollar;

}

echo "$euro" . "euro egale a " . "$dollar" . "$";


//exemple de sylvie 

$prix=2500;

function eurosDollars($prixEuros) {
    $tauxConversion = 1.12; // Taux de conversion fixe
    $prixDollars = $prixEuros * $tauxConversion;
    return $prixDollars;
}
echo "le prix en dollars est de :" . eurosDollars($prix). "<br/><br/>";





?>