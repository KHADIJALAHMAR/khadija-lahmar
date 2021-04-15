<?php
include_once('connexion.php');
if(isset($_POST['create']) && !empty($_POST['firstname']) && !empty($_POST['password'])){
   $firstname = $_POST['firstname'];
   $password = $_POST['password'];

   $sql="INSERT INTO `inscreption`(`nom_utilisateur`, `pass_word`) VALUES ('$firstname' ,'$password')"; 

   $query=mysqli_query($cnx,$sql);
   if($query){
       header('location:login.php');
   }else{
    echo "error ". mysqli_error($cnx);
    die();
   }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,   initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="./css/style.css">
</head>
<body>
    <h1>DJ</h1>
    <div class="wrapper">
    <form action="signeup.php" class="from-area" method="post">
         <div class="detail">
            <h1>SIGN UP</h1>
            <label for="firstname"><b>First Name</b></label>
            <input type="text" name="firstname">
            <label for="password"><b>password</b></label>
            <input type="password" name="password">
            <label for="password2"><b> password2</b></label>
            <input type="password" name="password2">
             <button type="submit" name="create"  class="btn" >sign up</button>
         </div>
     </form>
    </div>  
</body>
</html>