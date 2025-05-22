<?php
if(isset($_POST['submit'])){
    require_once "connexion.php";
    $marque = $_POST['marque'];
    $RAM = $_POST['ram'];
    $stockage = $_POST['stockage'];
    $prix = $_POST['prix'];
    $sql = "INSERT INTO pc (marque, ram, stockage, prix) VALUES ('$marque', '$RAM', '$stockage', '$prix')";
    $result = mysqli_query($con, $sql);
    $inserted_id = mysqli_insert_id($con);

    if(isset($_FILES['image']) && $_FILES['image']['error'] == 0){
        $image = $_FILES['image']['name'];
        $target_file = "uploads/".$inserted_id."-" . basename($image);
        move_uploaded_file($_FILES['image']['tmp_name'], $target_file);
    }
    $sql = "UPDATE pc SET image='$target_file' WHERE idPC='$inserted_id'";
    mysqli_query($con, $sql);
}
?>