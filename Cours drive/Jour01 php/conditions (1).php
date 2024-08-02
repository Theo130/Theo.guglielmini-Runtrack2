<?php

    $age = 21;
    $taille = 1.84;
    $prenom = "Loucas";
    $ville = "Grasse";
    $texte = "";

    $chats = $_GET["c"];
    $chiens = 4;
    $animaux = $chats + $chiens;

    if($animaux > 10) {
        $texte = "Waouh, vous avez beaucoup d'animaux !";
    }

    if($animaux < 10) {
        $texte = "Vous avez quelques animaux !";
    }

    $a = 10;
    $b = 3;
    $c = $a + $b;

    $texte1 = "Bonjour, ";
    $texte2 = "J'habite a ";

    $totalTexte = $texte1 . $texte2 . $ville;

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h1> Hello <?= $prenom; ?> </h1>
        <p> J'ai <?= $chats; ?> chats </p>
        <p> J'ai <?= $chiens; ?> chiens </p>
        <p> J'ai donc <?= $animaux; ?> animaux </p>
        <p> La variable "c" est égale à <?php echo $c; ?> </p>
        <p> <?php echo $totalTexte; ?> </p>
        <p> <?php echo $texte; ?> </p>
    </body>
</html>