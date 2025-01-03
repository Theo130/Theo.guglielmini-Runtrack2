<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMULAIRE RESERVATION</title>
        </head>
            <body>
        
            <div>

                <div1>
                <h1> <strong>RESERVATIONS</strong></h1>
                <br /><br /><br />


                <form method="POST" action="">

                <label for="nom"><b>NOM</b></label>
                    <input type="text" id="nom" placeholder="Entrez votre nom" name="nom" required>
                    <br /><br /><br />

                    
                <label for="prénom"><b>Prénom</b></label>
                    <input type="text" id="prénom" placeholder="Entrez votre prénom" name="prénom" required>
                    <br /><br /><br />
                    

                <label for="Nombre de personnes"><b>Nombre de personnes</b></label>
                    <input type="number" id="nombre de personnes" placeholder="Entrez nombre de personnnes" name="nombre de personnes" required>
                    <br /><br /><br />
                    
                    
                   <label for="nom_restaurant"><b>Nom restaurant</b></label>
                    <select name="restaurant"id="nom_restaurant"></br></br>
                    <option value="">--votre choix--</option>
                    <option valeur="text">l'ardoise salée</option>
                    <option valeur="text">le snack de Cartman</option>
                    <option valeur="text">le dîner de l'affamé</option>
                    <option valeur="text">l'anthropophage repu</option>    
                    <option valeur="text">la mouche dans le plat</option>
                
                </form>
               
                </div1>

                <div2>
                    <label for="heure_resa">heure de réservation:</label>
                    <input
                    type="datetime-local"
                    id="heure_resa"
                    name="heure_resa"
                    value="now"
                    min="now"
                    max="60days"/>
                </div2>
            </div>
            </body>
        </html>


<?php

session_start();

$Datetime = new Datetime('NOW', new DateTimeZone('Europe/Monaco'));
$Datetime->add(DateInterval::createFromDateString('2 months'));

echo $Datetime->format("Y-m-d H:i:s");


?>