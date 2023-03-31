<?php 


// $prenoms =  ['stephane', 'kgsdev', 'wilfried','donald'];  


// $tailes = count($prenoms); 



// for($i = 0 ; $i<$tailes ; $i++) {
//     $resultat = (array ) $prenoms[$i];

//     echo   implode("et", $resultat); 

   
// }



$ages = ['Mathilde' => 27, 'Pierre' => 29, 'Amandine' => 21];


$mails['Mathilde'] = 'math@gmail.com';
$mails['Pierre'] = 'pierre.giraud@edhec.com';
$mails['Amandine'] = 'amandine@lp.fr';




foreach($ages as $values =>  $cles) {

    echo  " les elements sont " . $values . " et la cle est la suivante . $cles <br> " ; 

}   $suite = [
    [1, 2, 4, 8, 16],
    [1, 3, 9, 27, 81]
];

/*Tableau multidimensionnel numéroté stockant
 *des tableaux associatifs et une valeur simple*/
$utilisateurs = [
    ['nom' => 'Mathilde', 'mail' => 'math@gmail.com'],
    ['nom' => 'Pierre', 'mail' => 'pierre.giraud@edhec.com'],
    ['nom' => 'Amandine', 'mail' => 'amandine@lp.fr'],
    'Florian'
];

/*Tableau multidimensionnel associatif stockant
 *des tableaux associatifs*/
$produits = [
    'Livre' => ['poids' => 200, 'quantite' => 10, 'prix' => 15],
    'Stickers' => ['poids' => 10, 'quantite' => 100, 'prix' => 1.5]
];

//$sous_suite = [1, 2, 4, 8, 16]
$sous_suite = $suite[0];
echo $sous_suite[0]. '<br>'.$sous_suite[2]. '<br>';

//$sous_util = ['nom' => 'Amandine', 'mail' => 'amandine@lp.fr']
$sous_util = $utilisateurs[2];
echo $sous_util['nom']. '<br>';

//$sous_produits = ['poids' => 200, 'quantite' => 10, 'prix' => 15]
$sous_produits = $produits['Livre'];
echo $sous_produits['prix'];
?>