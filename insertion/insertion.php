<?php


// affichage des données de l'armoire print_r($_POST);
//affichage de l'armoire print_r($_FILES);
//tjrs :on commence par inclure le fichier connexion
include('../connexion.php');
// vider les données de l'armoire $_POST
//Attention à la casse des variables dans le formulaire !!!
$nom_cheval = $_POST['nom'];
$race = $_POST['race'];
/**** Etape 1: l'upload du fichier image ****/
//si le fichier n'est pas trop grand (risque de saturation de la E.H)
if($_FILES['image']['size'] < 1048576) {
	// génération d'un nom au hasard du fichier image 
	 $nom_image = md5(uniqid(rand(), true)).'.png';
 	// charger l'image avec le nouveau nom généré et le stocker dans image 
	move_uploaded_file($_FILES['image']['tmp_name'],'../images/'.$nom_image);
}else {
 	echo 'le fichier est trop grand';
}	
/******Etape 2: Insertion des renseignements dans la table ***/

//la requête
$req= " INSERT INTO `cheval` ( `nom`, `race`, `image`) VALUES ( '$nom_cheval','$race', '$nom_image')";
$resultat = $bdd-> exec($req);
//message en cas d'erreur
if($resultat)   echo " le cheval à bien été ajouté" ;
else echo " désolé...erreur de soumission "; 


?>
