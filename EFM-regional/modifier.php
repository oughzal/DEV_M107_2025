<?php
if(isset($_POST['immat'])){
    $immat = $_POST['immat'];
    $marque = $_POST['marque'];
    $modele = $_POST['modele'];
    $date_mise_en_circulation = $_POST['date_mise_en_circulation'];
    $con = mysqli_connect("localhost", "root", "pwd@123", "db_parc-auto");
    $query = "UPDATE voitures SET marque='$marque', modele='$modele', date_mise_en_circulation='$date_mise_en_circulation' WHERE immat='$immat'";
    mysqli_query($con, $query);

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
    <!-- Formulaire -->
     <form action="?">
        <input type="hidden" name="immat" value="<?=$immat ?>">
        <div class="mb-3">
            <label for="marque" class="form-label">Marque</label>
            <input type="text" class="form-control" id="marque" name="marque" value="<?= $immat?>" required>
        </div>
        <div class="mb-3">
            <label for="modele" class="form-label">Modèle</label>
            <input type="text" class="form-control" id="modele" name="modele" required>
        </div>
        <div class="mb-3">
            <label for="date_mise_en_circulation" class="form-label">Date de mise en circulation</label>
            <input type="date" class="form-control" id="date_mise_en_circulation" name="date_mise_en_circulation" required>
        </div>
        <button type="submit" class="btn btn-primary">Modifier</button>
     </form>
</body>
</html>