<?php

use MercurySeries\Flashy\Flashy;


require_once './vendor/autoload.php' ; 

require "configuration/connector.php" ;  

if(!empty($_POST['title'])) {
$name = htmlspecialchars($_POST['title']);

$sql = ( 'INSERT INTO users  VALUES (?);' );

$resultat = $dbh->prepare($sql); 
$resultat->execute(array($name)); 

}  else{
    echo "remplissez tous les champs"; 
}



