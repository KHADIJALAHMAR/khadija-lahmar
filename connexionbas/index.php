<?php
include_once('connexion.php'); 
// ===chemain de fichier======
if (isset($_POST['envoyer']) && isset($_POST['username']) && isset($_POST['message'])){
 $nom=$_POST['username'];
 $messag=$_POST['message'];
 $insert="INSERT INTO utilisateur(username,messages) VALUES ('$nom' ,'$messag')";
 mysqli_query($cnx,$insert);
}
$select= 'SELECT * FROM utilisateur';
// ====exucution=======
$var= mysqli_query($cnx,$select);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>chat box</title>
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
</head>
<body>
<main>
    <div class="titleBar container">
       <h1>Welcome </h1>
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
       
                <form class="comment" action="traitement.php" method="post">
                    <input type="text" name="username" id="username" placeholder="Saisir votre username">
                    <input type="text" name="message" id="message" placeholder="Saisir votre message">
                    <input type="submit" class="envoyer" name="envoyer" value="Envoyer">
                </form>
            </div> 
       
 </main>       
</body>
</html>