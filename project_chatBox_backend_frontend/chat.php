<?php
session_start();
// ===chemain de fichier======
include_once('connexion.php'); 

if (isset($_POST['envoyer']) && isset($_POST['message'])){
$nom= $_SESSION['nom'];
 $messag=$_POST['message'];
 $insert="INSERT INTO utilisateur(username,messages) VALUES ('$nom' ,'$messag')";
 mysqli_query($cnx,$insert);
}
$select= 'SELECT * FROM utilisateur';
// ====exucution=======
$var= mysqli_query($cnx,$select);
if (isset($_POST['logout'])){
    unset($_SESSION['nom']);
    header('location: login.php');

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>chat box</title>
   <link rel="stylesheet"  href="./css/stylee.css">
</head>
<body>
<main>
    <div class="titleBar container">
       <h1>Welcome <?php echo $_SESSION['nom']; ?></h1>
     </div>
    
        <div class="messages container">
           
                <?php
                    foreach ($var as $row){
                        echo $row['temps'];
                        echo "-";
                        echo $row['username'];
                        echo"-";
                        echo$row['messages'];
                        echo "<br>";
                    }
                    ?>
        </div>
            <div class=" container">
       
                <form class="comment" action="chat.php" method="post">
                    <input type="text" name="message" id="message" placeholder="Saisir votre message">
                    <input type="submit" class="envoyer" name="envoyer" value="Envoyer">
                    <button class="btn" name="logout">logout</button>
                </form>
            </div> 
       
 </main>       
</body>
</html>