<?php

//connexion
include('../connexion.php');
//print_r($_FILES);
if($_FILES['image']['size'] < 1048576) {

	  $nom_image = md5(uniqid(rand(), true)).'.png';
 	 
	move_uploaded_file($_FILES['image']['tmp_name'],'../images/'.$nom_image);	
}else {
 	echo 'le fichier est trop grand';
}	
$nom= $_POST['nom'];
$race= $_POST['race'];
$requete = "INSERT INTO `cheval` (`ID`, `nom`, `race`, `image`) VALUES 
                                 (NULL, '$nom', '$race', '$nom_image');";
 $resultat= $bdd->exec($requete);
if($resultat==1) { echo'Votre cheval a bien été ajouté';
}else {
echo ' ohlala ...problème';
}
?>










