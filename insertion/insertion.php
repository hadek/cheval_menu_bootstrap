<?php


// affichage des données de l'armoire print_r($_POST);
//affichage de l'armoire print_r($_FILES);
//tjrs :on commence par inclure le fichier connexion
include('connexion.php');
// vider les données de l'armoire $_POST
//Attention à la casse des variables dans le formulaire !!!
$nom = $_POST['nom'];
$race = $_POST['race'];
//traitement de l'image 
echo $_FILES['image']['tmp_name'];
if($_FILES['image']['size'] < 1048576) {
	 $nom = md5(uniqid(rand(), true));
 	
	move_uploaded_file($_FILES['image']['tmp_name'],'images/'.$nom.'.png');
}else {
	
 	echo 'le fichier est trop grand';


}	

?>