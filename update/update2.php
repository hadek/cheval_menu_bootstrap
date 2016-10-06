<?php
include('../connexion.php');
//si une autre image à été chargée 

if(isset($_FILES)){
	
//supprime l'ancienne image
//unlink('../images/'.$_POST['image_old']);
//on charge la nouvelle image 
	if($_FILES['image']['size'] < 1048576) {
		// reprendre le nom de l'ancienne image
	 	$nom_image = $_POST['image_old'];
 		// charger l'image avec  
		move_uploaded_file($_FILES['image']['tmp_name'],'../images/'.$nom_image);
	}else {
 		echo 'le fichier est trop grand';
	}	

}
//sinon !!
//dans tout cas on update le nom et la race 
$req= " UPDATE `cheval` SET nom=:nom,race=:race WHERE  ID=:ID";
 $res=$bdd->prepare($req);
 $fonc= $res->execute(array('nom'=>$_POST['nom'], 'race' =>$_POST['race'],
                      'ID'=> $_POST['ID'] ));
//message en cas d'erreur
if($fonc)   echo " le cheval à bien été mis à jour" ;
else echo " désolé, il y avait une erreur de soumission "; 


?>