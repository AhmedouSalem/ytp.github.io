<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="etab.css">
</head>

<?php
//la connexion avec la base de données
$con=mysqli_connect("localhost","root","","bd annuaire téléphonique pour les établissements");
if(!$con){die("Erreur de type: " .mysqli_connect_error()); }
else "OK";

//Récupération de données
$nom=$_POST['nom'];

//Affichage les données de recherche
echo "<h1>"."Liste des employés"."</h1>";
echo "<table border width='80%'>";
echo "<tr height='50px'>";
echo "<th>". "nom". "</th>" ;
echo "<th>". "Description". "</th>" ;
echo "<th>". "tél". "</th>" ;
echo "<th>". "date de création". "</th>" ;
echo "<th>". "email". "</th>" ;
echo "<th>". "secteur d'activité". "</th>" ;
echo "<th>". "adresse". "</th>" ;
echo "<th colspan='2'>". "Action". "</th>"."</tr>" ;
$sql= "select * from etablissement where nom like '%$nom%' or  email like '%$nom%'";
$resultat = mysqli_query($con,$sql);
if(mysqli_num_rows($resultat)>0){
while($row=mysqli_fetch_assoc($resultat)){
	$id=$row['id-Etablissement'];
	echo "<tr>";
	echo"<td>". $row['nom']."</td>"; 
	echo"<td>". $row['Description']."</td>";
    echo"<td>". $row['tél']."</td>";
    echo"<td>". $row['date de création']."</td>";
    echo"<td>". $row['email']."</td>";
    echo"<td>". $row["secteur d'activité"]."</td>";
    echo"<td>". $row['adresse']."</td>";
	?>
	<td align="center">
                <a href="modifier.php?edit_id=<?php print($id); ?>" >
				<font color ="blue">Modifier<img src='update.PNG'></font></a>
                </td>
                <td align="center">
                <a href="supprimer.php?delete_id=<?php print($id); ?>" onclick="return confirm('Êtes-vous sûr de vouloir supprimer  ?')">
				<font color ="blue">Supprimer<img src='trash.PNG'></font></a>
                </td>
	  <?php
	echo "</tr>";
}	
	
	
	
} else 
{
	echo "<tr>";
	echo "<td colspan='4'>";
echo  "Aucun enregistrement";
echo "</td>";
}
echo "</table>";
?>