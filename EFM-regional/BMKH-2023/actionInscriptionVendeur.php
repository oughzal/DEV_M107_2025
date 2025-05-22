<?php
require_once "connexion.php";
if(isset($_POST['nom'])){
    $email = $_POST['email'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $tel = $_POST['tel'];
    $password = $_POST['password'];
    $passwordConfirm = $_POST['passwordConfirm'];

    if($password == $passwordConfirm){
        $query = "INSERT INTO vendeur (email, nom, prenom, tel, psw) VALUES ('$email', '$nom', '$prenom', '$tel', '$password')";
        mysqli_query($con, $query);
    }
  
}
header("Location: login.php");
?>