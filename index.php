<!-- Ahmedou Salem-->
<?php 

require_once('connection.php');

session_start();

error_reporting(0);

if (isset($_SESSION['username'])) {
    header("Location: projet.php");
}


if (isset($_POST['Login'])) {
  $UName = $_POST['UName'];
  $Password = md5($_POST['Password']);

$sql = "SELECT * FROM users WHERE email='$UName' AND password='$Password'";  
$result = mysqli_query($con, $sql);
  if ($result->num_rows > 0) {
    $row = mysqli_fetch_assoc($result);
    $_SESSION['username'] = $row['username'];
    header("Location: projet.php");
  } 
  else {
    echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
    
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="etab.css">
    <title>Login Form in PHP With Session</title>
</head>
<body >
  <table cellspacing="0">
    <tr>
      <th ><h1>Annuaire Telephonique pour les etablissements</h1></th>
    </tr>
    <tr>
      <td>

    <div class="container">
        
                        <h3>Identification </h3>
                    
                    
                        <form action="" method="post">
                            <input type="email" name="UName" placeholder=" votre nom" value="<?php echo $UName; ?>" class="form-control mb-3">
                            <input type="password" name="Password" placeholder=" mot de passe" value="<?php echo $_POST['Password']; ?>"class="form-control mb-3">
                            <button class="btn btn-success mt-3" name="Login">connexion</button><br>
                           
                        </form>
                   
    </div>
    </td>
  </tr>
  <tr>
    <td>
        <a href="register.php"><button style="width: 20%; background-color: blue;">Inscrir Ici</button></a>
    </td>
  </tr>
    </table>
    

</body>
</html>
