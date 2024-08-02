<?php

$a = $_GET ["a"] ?? 0 ;
$b = $_GET ["b"] ?? 0 ;
$calcul = $_GET ["calcul"] ?? "!" ;
$resultat = 0 ;

if ($calcul == "addition") {
     $resultat = $a + $b ;
}
elseif ($calcul == "soustraction") {
    $resultat = $a - $b ;
}
elseif ($calcul == "multiplication") {
    $resultat = $a * $b ;
}
elseif ($calcul == "division") {
    $resultat = $a / $b ;
}
elseif ($calcul == "modulo") {
    $resultat = $a % $b ;
}

/*$addition = $a + $b ;
$soustraction = $a - $b ;
$multiplication = $a * $b ;
$division = $a / $b ;*/

    
        /*if ($a <= 0 && $b <= 0) { 
            echo "Erreur" ;
        }

        elseif ($_GET ["$addition"] == "+") {
            $addition = $_GET ["a"] + $_GET ["b"] ;
        }

        elseif ($_GET ["$soustraction"] == "-") {
            $soustraction = $_GET ["a"] - $_GET ["b"] ;
        }

        elseif ($_GET ["$multiplication"] == "*") {
            $multiplication = $_GET ["a"] * $_GET ["b"] ;
        }

        elseif ($_GET ["$division"] == "/") {
            $division = $_GET ["a"] / $_GET ["b"] ;
           if ($b != 0) ;
        }
        else {
            echo "Ecrire un chiffre" ;
        }
*/
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projet Calculatrice</title>
    <link rel = "stylesheet" href = "style.css"/>

</head>
<body>
    <h1 class = "black">Calculatrice</h1>
    <p><?php echo $a ; ?></p>
    <p><?php echo $b ; ?></p>
    <p><?php echo $calcul ; ?></p>
    <div class = "global">
        <form method = "get" action = "index.php">
            <div class = "a">
                <input type = "number" name = "a" value = "<?php echo $a  ; ?>" required/>
            </div>
            <div class = "b">
                <input type = "number" name = "b" value = "<?php echo $b  ; ?>" required/>
            </div>
            <div class = "calcul">
                <select name = "calcul">
                    <option>addition</option>
                    <option>soustraction</option>                   
                    <option>multiplication</option>
                    <option>division</option>
                    <option>modulo</option>
                </select>
            </div>
            <div class = "resultat">
                <input type = "submit">
            </div>
            <div class = "resultat">
                <input type = "reset">
            </div>
        </form>
        <p>Le résultat est <?php echo $resultat ; ?></p>
    </div>
    
</body>
</html>