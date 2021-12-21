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
  <table cellspacing="0" style="cellpadding:0;cellspacing:0;width: 100%;background-color: rgb();">
    <tr>
      <th ><h1>Ajouter un établissement</h1></th>
      <th><a href="logout.php"><button style="background-color: green;color :white;">Sortir</button></a></th>
    </tr>
    <tr style="height: 5%;">
      <td rowspan="4" style="height:  5%;">
<div class="container"style="height: 5%">


<form method="post" action="project.php">
<label><b>nom:</b></label>
<input type="text" name="nom" id="nm" placeholder="Votre nom..." required><br>

<label><b>Description:</b></label>

<textarea  name="txt"  placeholder="Votre desicription"></textarea><br>

<label><b>tél:</b></label>
<input type="tel" name="num" id="prenom"  placeholder="Votre numero..." required><br><br>

<label><b>date de création:</b></label>
<input type="date" name="dateen" id="adrs" placeholder="date de création..." required><br><br>

<label><b>email:</b></label>
<input type="email" name="mail" id="email" placeholder="votre email..." required><br><br>

<label><b>secteur d'activité:</b></label>
<select  type="text" id="nom" name="actv">
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
<input type="text" name="adrs" id="adr" placeholder="votre adresse..." required><br>

<center><button style="type:submit;">Envoyer</button><br>

</form>
</div>
</center>
</form>
</div>
</td>
<td>
  <b><a href="liste_etab.php" ><font color="blue"><button>liste des établissements</button></font> </a></b><br>

</td>
</tr>
<tr>
<td><b><a href="cher_etab.php" ><font color="blue"><button>chercher un établissement</button></font> </a></b><br></td>
</tr>
<tr><td><b><a href="nb_etab.php" ><font color="blue"><button>nombre des établissement</button></font> </a></b>
<br></td></tr>
<tr><td><b><a href="secteur.php" ><font color="blue"><button>secteur d'activité</button></font> </a></b>
<br></td></tr>

</table>
</body>
</html>
