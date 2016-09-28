<?php 
/*****************Suppression de l'image**********************/
include('../connexion.php');
//récup de l'identifiant de l'enregistrement 
$ID= (int)$_POST['ID'];
//préparer la requete qui permet de récupérer l'adresse de l'image à supprimer 
$req1 = $bdd->prepare('SELECT image FROM `cheval` WHERE ID = :ID'); 
//fournir l'identifiant
$req1->execute(array('ID'=> $ID));
//chercher les resultat 
	$donnees = $req1->fetch(PDO::FETCH_ASSOC);
	 $image ='../images/'.$donnees['image'];
//supprimer l'image
 	if(unlink($image )) echo "l'mage a été supprimer<br>" ;
/**********************Supprimer l'enregistrement ***************/
//préparation de la requête ( testez la sur phpmyadmin)( la clause WHERE est une condition sql)
$req= " DELETE FROM `cheval` WHERE ID = :ID";
// la requête préparer
            $statement = $bdd -> prepare($req);
//Fournir le ID 
            $statement -> BindParam('ID', $ID, PDO::PARAM_INT);
//exécution de la requête
            $result = $statement -> execute();
//message en cas d'erreur
if($result)  { 
	echo " le cheval à bien été supprimer" ;
}
else echo " désolé, il y avait une erreur de soumission "; 


?>