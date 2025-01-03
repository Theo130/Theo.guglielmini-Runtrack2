<?php 

session_start();
include ("liste.php");
$id = $_GET['article'];
if (!isset($_SESSION['cart'])){ // si la session panier n'existe pas , crée la
    $_SESSION['cart'] = array();
    
};
?>


<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Page Produit</title>
<link rel="stylesheet" href="produit.css">

</head>
<body>
<?php include("navbar.php") ;?>

<div class="products">
    <img scr = "<?php echo htmlspecialchars($products[$id]['image']);?>"
     alt = "<?php echo htmlspecialchars($products[$id]['name']);?>">

        <div class = "products_info">

            <h2 class = "products-name">
                <?php echo htmlspecialchars($products[$id]['name']);?>
            </h2>

            <p class = "prix">
                <?php echo htmlspecialchars($products[$id]['prix']);?>
            </p>

            <p class = "description">
                <?php echo htmlspecialchars($products[$id]['description']);?>
            </p>
                <form action="panier.php" method="get">
                    <input type="hidden" name="id" value="<?php echo htmlspecialchars($id);?>">
                        <button type="submit" a href="panier.php">Ajouter au panier</button>
                </form>

        </div>
    
</div>

</body>
</html>



