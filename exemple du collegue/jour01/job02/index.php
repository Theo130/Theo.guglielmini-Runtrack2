<?php

$Hello = "Hello ";
$Plat = "LaPlateforme";
$Excla = "!";
$Helat = $Hello . $Plat . $Excla;

$Plateforme = $_GET ["Plateforme"];

if ($Plateforme == "Bye") {
  $message = "Bye LaPlateforme!";
}
if ($Plateforme == "Hello") {
    $message = "Hello LaPlateforme!";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job02</title>
</head>
<body>
    <p> <?=$Helat; ?>  </p>
</br>
    <p> <?=$message; ?> </p>
</body>
</html>
http://localhost/runtrack2/jour01/job02/index.php