<?php
// 1) Créer une bases de données "transports", 
// présentant différents types de transports (id, nom, prix, photo, presentation, ...)
// 2) Créer une page index.php, listant les différents transports enregistrés
// 3) Ajouter un formulaire de recherche, 
// qui redirige vers search.php?recherche=bateau pour rechercher par nom

$host = "localhost";
$port = "8888";
$dbname = "root";
$username = "root";
$password = "";

//chaque variable permet de remplir un champ de connexion

try {
    $db = new PDO("mysql:host=localhost;dbname=transport", "root", "");

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e){
    echo $e;
}

$req = $db->prepare("SELECT * FROM bus"); 
$req->execute();  
$user = $req->fetchAll();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bus.css">
</head>
<body>
    <nav class="nav">
        <h1 class="titre">PALMBUS</h1>
</nav>
</body>
</html>






<?php
foreach($user as $key => $value) {
    echo '<h2>' . 'ligne ' . $value["ligne"] . '</h2>';
}

?>