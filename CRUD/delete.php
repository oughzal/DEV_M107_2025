<?php
if(isset($_GET['id'])) {
    require_once('./connection.php');
    $id = $_GET['id'];
    $sql = "DELETE FROM stagiaire WHERE id = $id";
    if (mysqli_query($con, $sql)) {
        header("Location: index.php");
        exit();
    }
}

?>