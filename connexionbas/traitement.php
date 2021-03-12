<?php
include_once('connexion.php');
include_once('index.php');
$sql = mysqli_query($cnx, "INSERT INTO utilisateur (username, messages) VALUES ('$nom' '$messag')");

header("location: index.php");