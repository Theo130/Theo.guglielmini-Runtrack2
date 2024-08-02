<?php
include'panier.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amazou - Panier</title>
    <link rel="stylesheet" href="panier.css">
</head>
<body>
    <div class="nav">
        <br>
        <nav class="navbarre1">
            <img src="photocasque/logo" class="logo">
            <h1 class="titre">Amazou</h1>
            <input type="text" id="name" name="name" placeholder="Rechercher Amazou.fr" class="barrenav" required>
            <button><img src="photocasque/loupe.png" class="loupe"></button>
            <img src="photocasque/france.png" class="france">
            <h4 class="texteblanc1">FR</h4>
            <button class="button">Bonjour, Identifiez-vous<br>Compte et listes</button>
            <button class="button">Retour<br>et Commandes</button>
            <button class="buttonpanier"><img src="photocasque/panier.png" class="panier"><p>Panier</p></button>
        </nav>
        <br>
    </div>
    <div class="ligne1">
        <p class="texteblanc">Toutes</p>
        <p class="texteblanc">Meilleures Ventes</p>
        <p class="texteblanc">Amazou Basic</p>
        <p class="texteblanc">Ventes Flash</p>
        <p class="texteblanc">Dernières Nouveautés</p>
        <p class="texteblanc">Idées Cadeaux</p>
        <p class="texteblanc">Vendre sur Amazou</p>
        <p class="texteblanc">Prime</p>
        <p class="texteblanc">Livres</p>
        <p class="texteblanc">Guide de l'acheteur</p>
        <p class="texteblanc">Cartes Cadeaux</p>
    </div>

<div class="produit">
    
    <form action="panier.php" method="get">
        <input type="hidden" name="article" value="Lunettes FPV">
        <img src="<?php echo $articles[0]['image']?>" alt="" class="produit-image">
        <p class="produit-description">Des lunettes FPV de haute qualité pour une expérience immersive.</p>
        <button type="submit">Lunettes FPV</button>
    </form>
    <form action="panier.php" method="get">
        <input type="hidden" name="article" value="Iphone">
        <img src="<?php echo $articles[1]['image']?>" alt="" class="produit-image">
        <p class="produit-description">Le dernier modèle d'Apple iPhone avec des fonctionnalités avancées.</p>
        <button type="submit">Apple Iphone</button>
    </form>
    <form action="panier.php" method="get">
        <input type="hidden" name="article" value="Televiseur 4k">
        <img src="<?php echo $articles[2]['image']?>" alt="" class="produit-image">
        <p class="produit-description">La dernière console de jeu PlayStation 5 pour des heures de divertissement.</p>
        <button type="submit">Televiseur 4K</button>
    </form>
    <form action="panier.php" method="get">
        <input type="hidden" name="article" value="Claquette Puma">
        <img src="<?php echo $articles[3]['image']?>" alt="" class="produit-image">
        <p class="produit-description">Claquettes Puma confortables et stylées pour toutes les occasions.</p>
        <button type="submit">Puma mixte</button>
    </form>
    <form action="panier.php" method="get">
        <input type="hidden" name="article" value="Playstation 5">
        <img src="<?php echo $articles[4]['image']?>" alt="" class="produit-image">
        <p class="produit-description">La dernière console de jeu PlayStation 5 pour des heures de divertissement.</p>
        <button type="submit">Playstation 5</button>
    </form>
</div>
    <button class="checkout-btn">Passer la commande</button>
</body>
</html>
