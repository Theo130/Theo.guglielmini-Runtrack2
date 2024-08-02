

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <Link rel="stylesheet" href="exo1².css">
</head>
<body>
    <img id="bg" src="https://upload.wikimedia.org/wikipedia/commons/2/2d/My_little_pony_logo22.svg">
    <h1> My Little Pony </h1>
<font color="FF009E">
    <?php 

function fonctionTest ($prenom, $poid, $taille, $ailes, $herbi, $robe) {
        echo "Bonjour je vous présente mon poney " . $prenom . ", son poid est de " . $poid . " et ça taille est de " . $taille . ", ses ailes sont " . $ailes . ", il est " . $herbi . " et sa robe est " . $robe;
}

$tableau = array(1000, 1, 2, 3);
$table = count($tableau);

fonctionTest ("Ponytaxe", "328kg", "1M06", "des flame de couleur rouge", "omnivore", "rougeâtre");
echo "</br></br>";
fonctionTest ("Macarena", "367kg", "1M29", "des notes de musique multicolore", "herbivore", "multicolore");
echo "</br></br>";
fonctionTest ("Macaroni", "404kg", "1M48", "des pâtes", "omnivore", "jaune");



?>
</font>
</br></br></br>
    <p class="lien">http://localhost/runtrack2/jour04/exo/exo1.php</p>
</body>
</html>