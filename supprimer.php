
<?php 
$con=mysqli_connect("localhost","root","","bd annuaire téléphonique pour les établissements");
if(!$con){die("Erreur de type: " .mysqli_connect_error()); }
else "OK";
$id=$_GET['delete_id'];
$sql= "delete  from `etablissement` where `id-Etablissement`='$id' ";
$resultat = mysqli_query($con,$sql);

	
	if(isset($resultat))
	{
		header ("location:liste_etab.php");
	}
	else
	{
		echo "Erreur";
	}

	?>