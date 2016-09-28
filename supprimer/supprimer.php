<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Affiche table chevaux </title>
  <style type="text/css">
  table {
    width: auto;
}

th {
    height: 50px;
}
  table, th, td {
   border: 1px solid black;
}
  </style>
</head>
<body>

<!--Début Formulaire qui doit envoyer uniquement in ID -->
<form action="supprimer1.php" method="POST">
<table>
<tr><th>ID</th><th>Nom</th><th>Race</th><th>Photo</th>
<!-- script php pour la lecture des données de la table cheval --> 
<?php
//tjrs :on commence par inclure le fichier connexion
include('../connexion.php');
// écrire la requete de la lecture de la table cheval et la mettre dans une boite $req.
 $req ="SELECT * FROM cheval";
//executer la requête à l'aide de la fonction exec et mettre le resultat dans $resultat

$armoire = $bdd->query($req); 
//lecture des tiroirs de l'armoire $resultat à l'aide de la fonction foreach 

foreach($armoire  as $tiroir ){
// la colonne ID va contenir les identifiants de chaque cheval et en particulier celui à supprimer
echo '<tr><td><input type="radio" name="ID" value="'.$tiroir['ID'].'" ></td><td>'.$tiroir['nom'].'</td><td>'.$tiroir['race'].'</td><td><img src ="../images/'.$tiroir['image'].'"></td></tr>';
}
?>
</table>
<input type="submit" name="Supprimer">

<!-- Fin formulaire -->
</form>






</body>
</html>
