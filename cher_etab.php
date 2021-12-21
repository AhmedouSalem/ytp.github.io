<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}
?>
<?php
if(isset($_POST['btn'])){
header ("location:cher_emp_result.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="etab.css">
</head>
<body>
<div class="container">
<h1>chercher un établissement</h1>
<form method="post" action="cher_etab_result.php">
<label>Nom ou Email</label>
<input type="text" id="nm" name="nom" placeholder="Votre nom ou Email..." required>
<center><input type="submit" value="Envoyer" name="btn">
<br>
</form>
</div>
</body>
</html>
