<?php
session_start(); // Démarre la session
$_SESSION['user'] = "DEV101"; // Définit une variable de session

//suppression de la session
session_unset();
session_destroy(); // Détruit la session

?>