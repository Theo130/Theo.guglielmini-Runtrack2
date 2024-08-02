<?php

job01

$str = "la Plateforme ";

$str2 = "Vive ";

$str3 = "! ";

$str4 = $str2 . $str . $str3;


$val = "6";
$val2 = "4";

$val3 = $val + $val2;


$myBool = "true";

exo0

   $pseudo = $_GET["prenom"];
   $anes = 0;
   $chevres = 0;
   $poules = 0;
   $vaches = 0;

   $texte = "Wesh " . $pseudo;

   echo $texte;

Exo1

$score = $_GET ["score"];

if ($score >= 10) {
  $message = "Victoire";
}
if  ($score <= 10) {
  $message = "Défaite"
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <p> <?=$str4; ?></p>
  <p> <?=$val3; ?></p>
  <p> <?=$message; ?></p>
</body>
</html>