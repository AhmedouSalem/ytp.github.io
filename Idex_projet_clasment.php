<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="etab.css">
</head>
<body id="cvc"></body>

<?php
$con=mysqli_connect("localhost","root","","bd annuaire téléphonique pour les établissements");
if(!$con){die("Erreur de type: " .mysqli_connect_error()); }
else "OK";

//Affichage de données
echo "<h1 >"."Liste des établisment "." <a href='projet.php'><button style='width:20%;background-color:blue;'>Acceuil</button></a></h1>";
echo "<table  id='c' border >";
echo "<tr  id='c' >";
echo "<th width='10px' class='df' id='c'>". "ID". "</th>";
echo "<th  id='c'>". "Nom". "</th>";
echo "<th  id='c' width='100px'> ". "Desicription". "</th>" ;
echo "<th  id='c'>". "Tél". "</th>" ;
echo "<th  id='c'> ". "Date de création". "</th>" ;
echo "<th  id='c'>". "E-mail". "</th>" ;
echo "<th  id='c'>". "Secteur_d'activité". "</th>" ;
echo "<th id='c'>". "Adresse". "</th>" ;
echo "<th id='c' colspan='2'>". "Action". "</th>"."</tr>" ;
$sectur = $_GET['edit_id'];
$sql= "SELECT * FROM `etablissement` WHERE `secteur d'activité` = '$sectur'";
$resultat = mysqli_query($con,$sql);
if(mysqli_num_rows($resultat)>0){
while($row=mysqli_fetch_assoc($resultat)){
	$id = $row['id-Etablissement'];
	echo "<tr id='c'>";
	echo"<td id='c'>".$row['id-Etablissement']."</td>";
	echo"<td id='c'>".$row['nom']."</td>"; 
	echo "<td id='c'>".$row['Description']."</td>";
	echo "<td id='c'>".$row['tél']."</td>";
	echo "<td id='c'>".$row['date de création']."</td>";
	echo "<td id='c'>".$row['email']."</td>";
	echo "<td id='c'>".$row["secteur d'activité"]."</td>";
	echo "<td id='c'>".$row['adresse']."</td>";
		
	?>
	<td id='c' align="center">
        <a href="modifier.php?edit_id=<?php print($id); ?>" ><img src='update.PNG'>Modifier</a>        
	</td>			
    <td id='c'  align="center">            
        <a  href="suprime.php?delete_id=<?php print($id); ?>" onclick="return confirm('Êtes-vous sûr de vouloir supprimer  ?')">
			<img src='trash.PNG' >supprimer</a>        
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