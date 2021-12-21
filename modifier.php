<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>
<?php
$con=mysqli_connect("localhost","root","","bd annuaire téléphonique pour les établissements");
if(!$con){die("Erreur de type: " .mysqli_connect_error()); }
else "OK";
if (isset($_GET['edit_id'])){
$id=$_GET['edit_id'];
$sq= "SELECT * FROM `etablissement` WHERE `id-Etablissement`='$id' ";
$result = mysqli_query($con,$sq);
if($result){
$row = mysqli_fetch_assoc($result);

$nm=$row["nom"];
$desc=$row["Description"];
$tel=$row["tél"];
$dte=$row["date de création"];
$email=$row["email"];
$sec=$row["secteur d'activité"];
$ad=$row["adresse"];
}
else echo "controler votre requêtte";
}
if(isset($_POST['btn-save']))
{
	$nom = $_POST['nom'];
    $descr = $_POST['txt'];
    $numb = $_POST['num'];
    $date = $_POST['dateen'];
    $email = $_POST['mail'];
    $sect = $_POST['actv'];
    $adr = $_POST['adrs'];
	
	$sql= "UPDATE  etablissement SET `nom`='$nom ', `Description`='$descr', `tél`='$numb', `date de création`='$date',`email`='$email', `secteur d'activité`='$sect', `adresse`='$adr' WHERE `id-Etablissement`='$id' ";
	$resultat = mysqli_query($con,$sql);
	if($resultat)
	{
		header("Location: liste_etab.php");
	}
	else
	{
		echo "Erreur";
		
	}
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="etab.css">
</head>
<body>
<table cellspacing="0" cellpadding="0">
  <tr><th><a href="projet.php"><button>Acceuil</button></a></th>
      <th><a href="logout.php"><button style="background-color: green;color :white;">Sortir</button></a></th>
  </tr>
  <tr style="height: 5%;"><td colspan="2" style="height: 5%;">
<div class="container"style="height: 5%;">
<h1>Modifier un établissement</h1>
<form method="post"  >
<label><b>nom:</b></label>
<input type="text" name="nom" id="nm" value="<?php if (isset($_GET['edit_id'])){print $nm;} ?>" required><br>

<label><b>Description:</b></label>
<textarea  name="txt" required><?php if (isset($_GET['edit_id'])){print $desc;} ?></textarea><br>

<label><b>tél:</b></label>
<input type="text" name="num" id="prenom"  value="<?php if (isset($_GET['edit_id'])){print $tel;} ?>" required><br><br>

<label><b>date de création:</b></label>
<input type="date" name="dateen" id="adrs" value="<?php if (isset($_GET['edit_id'])){print $dte;} ?>" required><br><br>

<label><b>email:</b></label>
<input type="email" name="mail" id="email" value="<?php if (isset($_GET['edit_id'])){print $email;} ?>" required><br><br>

<label><b>secteur d'activité:</b></label>
<select type="text" id="nom" name="actv" value="<?php if (isset($_GET['edit_id'])){print $sec;} ?>" required>
              <option ><?php if (isset($_GET['edit_id'])){print $sec;} ?></option>
			  <option >informatique</option>
              <option>Récharche </option>
              <option>santé ,Médecine</option>
              <option>Secrité</option>
              <option>Télécommunications</option>
              <option>Services_àlapersonne</option>
              <option>Services_publics</option>
              <option>Asurance</option>
              <option>Commerce</option>
              <option>Communication</option>
              <option>Finance</option>
              <option>Horeca_(Hotellerie, Restauration, Café)</option>
              <option>Electricité</option>
              <option>Entretien</option>
              <option>Trasport, Logistique</option>
            </select>
<br>

<label><b>adresse:</b></label>
<input type="text" name="adrs" id="adr" value="<?php if (isset($_GET['edit_id'])){print $ad;} ?>" required><br>

<center><input type="submit" value="Modifier" name="btn-save">

<br>
</form>
</div>
</center>
</form>
</div>
</td>
</tr>
</table>
</body>
</html>
