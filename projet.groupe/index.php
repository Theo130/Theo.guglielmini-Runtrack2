<?php

include("liste.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="reception.css">
</head>
<body>

<?php include("navbar.php") ;?>

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
