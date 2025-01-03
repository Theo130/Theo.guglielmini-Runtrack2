<?php
// Créer une fonction calculerPrix, qui prends deux paramètres :
// Un prix de base, et une réduction en pourcentage. La fonction doit renvoyer le prix final
?>
<?php

/*function calculprix($prixdebase, $reduction){
    $prixavecreduc = $prixdebase * $reduction;

    return $prixavecreduc;
}*/

function calculprix($prixdebase, $reduction){

    //$prixReduction = $prixdebase * $reduction;
    //$prixavecreduc = $prixdebase - $prixReduction

    $prixavecreduc = $prixdebase - ($prixdebase * $reduction);

    return $prixavecreduc;
}



$prixdebase = 20;
$prixavecreduc = calculprix($prixdebase, 0.25);

echo $prixavecreduc ."<br/>";



//exemple de sylvie 

$prix2 = 3400;
$promo = 5;

function calculerprix($prixBase, $reductionPourcentage) {
    $reduction = $prixBase * ($reductionPourcentage / 100); 
    $prixFinal = $prixBase - $reduction; //  après réduction
    return $prixFinal;
}
echo "le prix final est de :". calculerprix($prix2,$promo). "<br/><br/>";

?>