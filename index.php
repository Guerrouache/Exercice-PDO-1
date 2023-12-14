<?php 
 require_once('./database.connect.php');

//EXO 1

// $request = $database->query('SELECT * FROM clients');
// $clients = $request->fetchAll();
// var_dump($clients);


//EXO2
//  $request = $database->query('SELECT *FROM showtypes ');
//  $shows =$request ->fetchAll();
//  var_dump($shows);


 //EXO3
//  $request = $database->query('SELECT * FROM `clients` LIMIT 20;');
//  $clients = $request->fetchAll();
//  var_dump($clients);

//EXO4
// $request = $database->query('SELECT * FROM clients INNER JOIN cards ON clients.cardNumber = cards.cardNumber WHERE cardTypesId=1; ');
// $cardtypes = $request->fetchAll();
// var_dump($cardtypes);
    
//EXO5
// $request = $database->query('SELECT * FROM `clients` WHERE lastName LIKE "m%" ');
// $clients = $request->fetchAll();
// var_dump($clients);


//EXO6
//  $request = $database->query('SELECT * FROM `shows` ORDER BY title ASC');
//  $shows = $request->fetchAll();
//  var_dump($shows);

//EXO7
$request = $database->query('SELECT * FROM `clients` WHERE 1');
$clients = $request->fetchAll();
var_dump($clients);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <!-- EXO5
         <p> Nom </p>
        <ul>
            <?php 
            foreach ($clients as $client) {
                echo '<li> Nom : '. $client['lastName']. '</li>';
            }
            ?>
        </ul>

        <p>Prenom</p>
        <ul>
            <?php 
            foreach($clients as $client){
                echo '<li> Prenom : '. $client['firstName']. '</li>';
            }
            
            ?> 
        </ul>-->

        <!-- <p> spectacle</p>
        <ul>
            <?php 
                foreach($shows as $show){
                    echo '<li>'. $show['title']. ' par '. $show['performer']. ' le '. $show['date']. " a ". $show ['startTime']. '</li>';
                }
            ?>
        </ul> -->

        <ul>
            <?php
                foreach($clients as $client){
                    echo '<li> Nom : '. $client['lastName']. ' Prénom :'. $client['firstName']. ' Date de naissance : '.$client['birthDate']. ' Carte de fidelité : '. $client['card']. ' numéro de carte : '. $client['cardNumber']. '</li>';

                } 
            ?>
        </ul>

    
    
</body>
</html>