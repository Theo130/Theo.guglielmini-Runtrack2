<?php

include("liste.php")

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>


<div class="nav">
</br>
<nav class="navbarre1">
    
        <img src="image/logo.png" class="logo">
        <h1 class="titre">mazou</h1>

       
 
<input type="text" id="name" name="name" placeholder= "   Rechecher Amazou.fr" class="barrenav" required />

<button><img src="image/loupe.png" class="loupe"></button>

<img src="image/france.png" class="france">
<h4 class="texteblanc1">FR</h4>

<button class="button">Bonjour, Identifiez-vous  <br/>  Compte et listes</button>
    
<button class="button">Retour <br/> et Commandes </button>

<button class="buttonpanier"><img src="image/panier.png" class="panier"><p>panier</p></button>

</nav>
</br>
</div class="ligne1">

<div class="ligne1">
<p class="texteblanc">Toutes</p>
<p class="texteblanc">Meilleures Ventes</p>
<p class="texteblanc">Amazou Basic</p>
<p class="texteblanc">Ventes Flash</p>
<p class="texteblanc">Dernière Nouveautés</p>
<p class="texteblanc">Idées Cadeaux</p>
<p class="texteblanc">Vendre sur Amazou</p>
<p class="texteblanc">Prime</p>
<p class="texteblanc">Livres</p>
<p class="texteblanc">Guide de l'acheteur</p>
<p class="texteblanc">Cartes Cadeaux</p>

</div>





<div class="fond">
<h1>Liste des Produits</h1>
    <ul>
        <?php foreach ($products as $element): ?>
            <div class="border">
            <li class="produit">
                <img src="<?php echo $element["image"];?>" class="imageproduit">
                <!-- Ajout d'un lien vers le script PHP de description avec le nom de l'article comme paramètre GET -->
                <h2><a href="produit.php?article=<?php echo urlencode($element["id"]); ?>"><?php echo $element["name"]; ?></a></h2>
                <p><?php echo $element["description"]; ?></p>
                <p>Prix: <?php echo $element["prix"]; ?></p>
                <button><a href="panier.php?article=<?php echo urlencode($element["name"]); ?>">Ajouter au panier</a></button>
            </li>
            </div>
        <?php endforeach; ?>
    </ul>
        </div>
</body>
</html>