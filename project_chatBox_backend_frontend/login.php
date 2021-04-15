
<?php
session_start();
include_once('connexion.php');
if (isset($_POST['create']) && !empty($_POST['nom2']) && !empty($_POST['password'])){
    // ======variable form utilisateur=====
    $nom2=$_POST['nom2'];
    $pass=$_POST['password'];
  // =====select information======
  $query="SELECT * FROM inscreption WHERE nom_utilisateur='$nom2' AND pass_word='$pass'";
// =====EXUCUTOIN=========
  $result=mysqli_query($cnx,$query);
  if (mysqli_num_rows($result) > 0) {
      $_SESSION['nom']= $nom2;
  }
  else {
    //====query error=====
      header('location:login.php?error=password ou username inccorect');
  }
}
if(isset( $_SESSION['nom'])){
  header('location: chat.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" type="text/css" href="./css/styl.css">
</head>
<body>
<h1> DJ</h1>
     <div class="formulair">
        <form action="#" method='post' class="fr"  >
            <div class="mac">
            <h1>LOGIN</h1>
            <?php
            // ====query ======
            if(isset($_GET['error'])){
                $error = $_GET['error'];
                echo "<p style='color:white'>$error</p>";
            }
            ?>
            <label for="nomutilisateur" class="info" id="lbnom"> Nom utilisateur</label>
            <input type="text" name="nom2"  id="nomutilisateur" placeholder="entrer le nom">
            <label for="passewordutilisateur"  class="info" id="lbpassword">Password</label>
            <input type="password" name="password" id="passwordutilisateur">
            <button type="submit" name="create"  class="btn" > envoyer</button>
            <a href="signeup.php" id="link">signe up</a>
        </div>
    </form>
    </div>
</body>
</html>
