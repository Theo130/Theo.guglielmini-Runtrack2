<?php
for($issa = 0; $issa < 1000; $issa++){
echo "$issa" . "</br>";
}
?>

<?php
//correction 



for ($issa = 2; $issa < 1000; $issa++) {
    $isPrime = true;

    // Tester la divisibilité par tous les nombres inférieurs à la racine carrée de $issa
    for ($i = 2; $i <= sqrt($issa); $i++) {
        if ($issa % $i == 0) {
            $isPrime = false;
            break; // Si le nombre est divisible par $i, il n'est pas premier
        }
    }

    // Si le nombre est premier, on l'affiche
    if ($isPrime) {
        echo "$issa est un nombre premier" . "</br>";
    }
}

?>