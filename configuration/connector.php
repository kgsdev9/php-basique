<?php   

try{

    $user = "root" ; 
    $pass = ""  ; 

    $dbh = new PDO('mysql:host=localhost;dbname=test', $user, $pass);
   

}catch(PDOException $e )  {
    die("Error: ".$e->getMessage());
}