<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="etab.css">
    <title>Document</title>
</head>
<body>
<?php
$con=mysqli_connect("localhost","root","","bd annuaire téléphonique pour les établissements");
if(!$con){die("Erreur de type: " .mysqli_connect_error()); }
else "OK";
//Affichage de données

echo "<table border >";
echo "<tr>"."<th >"."<a href='projet.php'>"."<button>"."Acceuil"."</button>"."</a>"."</th>";






echo "<th >"."<a href='logout.php'>"."<button style='background-color: green;color :white;'>"."Sortir"."</button>"."</a>"."</th>"."</tr>";
echo "<th colspan='10'>"."<h1>"."Liste Des Établisment Par Secteur D'activité"."</h1>"."</th>"."</tr>";
echo "<tr>";
echo "<th><h3>Les Secteur d'activité </h3></th>"; 
echo "<th width='50%' ><h3>Action</h3></th></tr>" ;

$sql= "SELECT DISTINCT `secteur d'activité`FROM `etablissement`";
$resultat = mysqli_query($con,$sql);
if(mysqli_num_rows($resultat)>0){
while($row=mysqli_fetch_assoc($resultat)){
    $id = $row["secteur d'activité"];
    echo "<tr>";
    echo"<td>".$row["secteur d'activité"]."</td>";
?>    
    <td align="center">
    <a href="Idex_projet_clasment.php?edit_id=<?php print($id); ?>" >clîké_Pour_visualisé_Plus</a>        
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


   