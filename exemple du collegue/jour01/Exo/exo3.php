<?php


   $PainChocos = 0;
   $Brioches = 0;
   $Croissants = 0;
   $PC = 0;
   $étudiant = $_GET ["étudiant"];

   if  ($étudiant == "Théo") {
    $PC = "PC N°3";
    $Brioches = "à 2 Brioches";
   }

   if ($étudiant == "Walid") {
    $PC = "PC N°7";
    $Croissants = "à 6 Croissants";
   }

   if ($étudiant == "Hugo") {
    $PC = "PC N°21";
    $PainChocos = "à 2 Pain au chocolats";
    $Croissants = "à 2 Croissants";
   }

   $message = $PC;
   $message2 = $Brioches;
   $message3 = $Croissants;
   $message4 = $PainChocos;
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <h1> <?=$message ?></h1>
  <h1> <?=$message2 ?></h1>
  <h1> <?=$message3 ?></h1>
  <h1> <?=$message4 ?></h1>
</body>
</html>
http://localhost/runtrack2/jour01/exo/exo3.php?%C3%A9tudiant=Walid