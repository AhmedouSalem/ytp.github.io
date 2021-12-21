<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
</head>
<body>
<?php
//la connexion avec la base de données
$con=mysqli_connect("localhost","root","","bd annuaire téléphonique pour les établissements");
if(!$con){die("Erreur de type: " .mysqli_connect_error()); }
else "OK";
//Récupération de données
$nom=$_POST['nom'];
$desc=$_POST['txt'];
$numb=$_POST['num'];
$date=$_POST['dateen'];
$mail=$_POST['mail'];
$sect=$_POST['actv'];
$adr=$_POST['adrs'];
//Insertion de données dans la BD
$sql= "insert into etablissement (nom,Description,tél,`date de création`,email,`secteur d'activité`,adresse) values ('$nom', '$desc', '$numb', '$date', '$mail', '$sect','$adr')";
if(mysqli_query($con,$sql)){
header ("location:liste_etab.php");
}
else echo "Erreur d'insertion ";
?>
</body>
</html>