<?php
$score = $_GET ["score"];

if ($score > 10) {
  $message = "Victoire";
}
if ($score == 10) {
    $message = "égal";
}
if  ($score < 10) {
  $message = "Défaite";
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1> <?=$message; ?></h1>
    
</body>
</html>

http://localhost/runtrack2/jour01/exo/exo1.php?score=10 