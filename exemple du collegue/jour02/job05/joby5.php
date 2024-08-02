<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
        include('fonctions.php');
        ?>
        <form method="POST" action="joby5.php">
            Entrez votre nombre (entre 1 et 1 000 SVP)<input type="text" name="num"/>
            <input type="submit" name="valider" value="OK"/>
        </form>
        <?php
        if(isset($_POST['valider'])){
            $n=$_POST['num'];
            $v=premiers($n);
            echo $n.' '.$v.'.';
        }
        ?>
</br></br></br>
</body>
</html>

http://localhost/runtrack2/jour02/job05/joby5.php