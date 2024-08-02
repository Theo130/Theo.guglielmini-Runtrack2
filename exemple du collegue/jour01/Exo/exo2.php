<?php
$pokemon = $_GET ["pokemon"];

if ($pokemon == 1) {
  $message = "Mew";
}
if ($pokemon == 2) {
    $message = "Cadoizo";
}
if  ($pokemon == 3) {
  $message = "Regigigas";
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

http://localhost/runtrack2/jour01/exo/exo2.php?pokemon=3