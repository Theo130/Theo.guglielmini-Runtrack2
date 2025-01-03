<?php
//Créer une fonction sommePanier, qui prends en paramètre une liste de prix d'articles,
// et retourne la somme des articles (Le prix total du panier)
?>

<?php


$panier=[30,10,56];
function sommePanier($listePrixArticle) {
    $somme=0;
    foreach ($listePrixArticle as $prix ) {
        $somme= $somme + $prix ;
    }
    return $somme;
}

echo "total du prix  des articles :" . sommePanier($panier);



?>