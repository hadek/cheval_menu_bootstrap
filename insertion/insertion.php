<?php

//print_r($_POST);echo '<br>';

//print_r($_FILES);
if($_FILES['image']['size'] < 1048576) {

	echo  $nom_image = md5(uniqid(rand(), true)).'.png';
 	 
	//move_uploaded_file($_FILES['image']['tmp_name'],'../images/'.$nom_image);	
}else {
 	echo 'le fichier est trop grand';
}	
?>