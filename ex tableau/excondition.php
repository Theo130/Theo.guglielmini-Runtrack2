
<?php
   
    $valeur = $_GET ["temperature"];
   

   //if (isset($_GET[$valeur])) {}
   
   if ($valeur <= 15) {
    echo "Il fait frais";
    } else if ($valeur <= 25) {
       echo "Il fait chaud";
   } else if ($valeur < 35) {
        echo "Il fait hyper chaud";
    } else {
       echo "Il fait trop chaud";
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

   <form action="extableau.php" method="get">
        <input type="text" name="temperature" placeholder="Entrez une température" required/>
        <input type="submit"/>
   </form>

</body>
</html>
