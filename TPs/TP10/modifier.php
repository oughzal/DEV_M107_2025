<?php
require_once('connexion.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $cin = $_POST['nom'];
    $nomComplet = $_POST['prenom'];
    $dateNaissance = $_POST['date'];
    $salaire = $_POST['salaire'];
    $numService = $_POST['service_id'];

    //TODO : modifier l'enregistrement dans la base de données
} else{
    $id = $_GET['id'];
    $query = "SELECT * FROM employés WHERE id = $id";
    $result = mysqli_query($con, $query);
    if (mysqli_num_rows($result) > 0) {
        
        $row = mysqli_fetch_assoc($result);
        $cin = $row['CIN'];
        $nomComplet = $row['nomComplet'];
        $dateNaissance = $row['dateNaissance'];
        $salaire = $row['salaire'];
        $numService = $row['service_id'];
        //TODO : récupérer le service de l'employé
    } else {
        die("Aucun enregistrement trouvé");
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../assets/bootstrap.min.css">
    <script src="../../assets/bootstrap.bundle.js"></script>
</head>
<body>

    <div class="container">
        <h1>Modifier un produit</h1>
        <form action="modifier.php" method="POST">
            <input type="hidden" name="id" value="<?=$id ?>">
            <div class="mb-3">
                <label for="nom" value="<?=$CIN?>" class="form-label">CIN</label>
                <input type="text" class="form-control" id="nom" name="nom" required>
            </div>
            <div class="mb-3">
                <label for="prenom" class="form-label">Nom Complet</label>
                <input type="text" class="form-control" id="prenom" name="prenom" required>
            </div>
            <div class="mb-3">
                <label for="date" class="form-label">Date de Naissance</label>
                <input type="date" class="form-control" id="date" name="date" required>
            </div>
            <div class="mb-3">
                <label for="salaire" class="form-label">Salaire</label>
                <input type="number" class="form-control" id="salaire" name="salaire" required>
            </div>
            <div class="mb-3">
                <label for="poste" class="form-label">service</label>
                <select name="numService" id="poste" class="form-select">
                <?php 
                //TODO : remplir la liste des services de la base de données
                $query = "SELECT * FROM services";
                $result = mysqli_query($con, $query);
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                      $selected = ($numService == $row['id']) ? "selected" : "";
                            echo "<option value='" . $row['id'] . "' $selected>" . $row['intitulé'] . "</option>\n";
                        
                    }
                } 
                ?>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Modifier</button>
        </form>
    </div>
</body>
</html>