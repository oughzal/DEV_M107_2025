<?php
if(isset($_POST['email'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $query = "SELECT * FROM vendeur WHERE email='$email' AND psw='$password'";
    $result = mysqli_query($con, $query);
    if(mysqli_num_rows($result) > 0){
        $user = mysqli_fetch_assoc($result);
        session_start();
        $_SESSION['id'] = $user["idVendeur"];
        header("Location: accueil.php");
    } else {
       header("Location: login.php");
    }
}

?>