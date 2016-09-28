<?php 
//tester le bon fonctionnement de l'envoi de l'identifiant 

//print_r($_POST, $return = null);
include('../connexion.php');
// vider les données de l'armoire $_POST
//Attention à la casse des variables dans le formulaire !!!
$ID= (int)$_POST['ID'];
//préparation de la requête ( testez la sur phpmyadmin)( la clause WHERE est une condition sql)
$req= " DELETE FROM `cheval` WHERE ID = :ID";
// la requête préparer
            $statement = $bdd -> prepare($req);
//Fournir le ID 
            $statement -> BindParam('ID', $ID, PDO::PARAM_INT);
//exécution de la requête
            $result = $statement -> execute();
//message en cas d'erreur
if($result)   echo " le cheval à bien été supprimer" ;
else echo " désolé, il y avait une erreur de soumission "; 


?>