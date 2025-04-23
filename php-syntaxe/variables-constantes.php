<?php
// Déclaration de variables en PHP
$name = "John Doe"; // Chaîne de caractères
$age = 30; // Entier
$height = 1.75; // Flottant
$isStudent = false; // Booléen
$skills = array("PHP", "JavaScript", "HTML"); // Tableau
$person = array(
    "name" => "John Doe",
    "age" => 30,
    "height" => 1.75,
    "isStudent" => false,
    "skills" => array("PHP", "JavaScript", "HTML")
); // Tableau associatif

// Affichage des variables
echo "Nom : " . $name . "<br>";
echo "Âge : " . $age . "<br>";
echo "Taille : " . $height . " m<br>";

// Affichage d'un tableau
echo "Compétences : ";
foreach ($skills as $skill) {
    echo $skill . " ";
}
echo "<br>";
echo "Informations sur la personne : <br>";
foreach ($person as $key => $value) {
    if (is_array($value)) {
        echo $key . " : " . implode(", ", $value) . "<br>";
    } else {
        echo $key . " : " . $value . "<br>";
    }
}
// Déclaration de constantes
const PI = 3.14159; // Constante numérique
const SITE_NAME = "Mon Site Web"; // Constante chaîne de caractères
const MAX_USERS = 100; // Constante entière
const IS_ACTIVE = true; // Constante booléenne
?>