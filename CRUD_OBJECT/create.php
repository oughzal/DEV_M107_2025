<?php
// logique de traitement du formulaire
if(isset($_POST["nom"])){
    include_once("stagiaire.php");
    // $stagiaire = new Stagiaire(0,$_POST["nom"],$_POST["prenom"]);
    $stagiaire = new Stagiaire(0, $_POST["nom"], $_POST["prenom"]);
    StagiaireDB::insert($stagiaire);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>