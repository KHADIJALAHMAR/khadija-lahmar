<?php
    include_once('connexion.php');
    if(isset($_POST['create']) && !empty($_POST['firstname']) && !empty($_POST['password'])){
        $firstname = $_POST['firstname'];
        $password = $_POST['password'];
        $id= (int)$_GET['id'];
        $updat="UPDATE inscreption SET nom_utilisateur='$firstname',pass_word='$password' WHERE id=$id";
        $query=mysqli_query($cnx,$updat);
       if ( $query) {
           header('Location: admin.php');
       }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/updat.css">
    <title>Document</title>
</head>
<body>
<form action="#"  method="post">
         <div class="detail">
            <h1>update</h1>
            <label for="firstname"><b>First Name</b></label>
            <input type="text" name="firstname" placeholder="Enter Name">
            <label for="password"><b>password</b></label>
            <input type="password" name="password" value="">
             <button type="submit" name="create"  class="btn" >envoyer</button>
         </div>
     </form>
</body>
</html>