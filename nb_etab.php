<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="etab.css">
</head>
<body>
<?php
    
    $con=mysqli_connect("localhost","root","","bd annuaire téléphonique pour les établissements");
if(!$con){die("Erreur de type: " .mysqli_connect_error()); }
else "OK";
$sq = "SELECT COUNT(*) `nbb` FROM `etablissement`";
$result = mysqli_query($con,$sq);
    if(mysqli_num_rows($result)>0)
        {
         while($row=mysqli_fetch_assoc($result)){
            echo "<div style ='background-color : white'>";
            echo "<h1> Le nombre des élablisments est: " . $row['nbb'] . "</h1>";
            echo "</div>";
            echo "<h1>"."<a href='projet.php'>"."<button style='width: 20%; background-color: blue;'>"." Click pour retourné"."</button>"."</a>"."</h1>";
        }
        }
    else
        {
            echo "Erreur";
        } 


?>	