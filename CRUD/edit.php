<?php
require_once('./connection.php');
?>

<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $idGroupe = $_POST['idGroupe'];
if($id == 0){
    $sql = "INSERT INTO stagiaire (nom, prenom,idGroupe) VALUES ('$nom', '$prenom', $idGroupe)";
}else{
    $sql = "UPDATE stagiaire SET nom='$nom', prenom='$prenom', idGroupe='$idGroupe' WHERE id=$id";
}
    if (mysqli_query($con, $sql)) {
        header("Location: index.php");
        exit();
    } else {
        echo "Error: " . mysqli_error($con);
    }
    mysqli_close($con);
 
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link rel="stylesheet" href="../assets/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/font-awesome.min.css">
</head>
<body>
    <div class="container">
<?php

$id = 0;
$nom = "";
$prenom = "";
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM stagiaire WHERE id = $id";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
    if ($row) {
        $nom = $row['nom'];
        $prenom = $row['prenom'];
    }
}
    ?>

    ?>
    <h1>Edit Stagiaire</h1>
    <form action="?" method="POST" class="container mt-4">
        <input type="hidden" name="id" value="<?=$id?>">
        <div class="mb-3">
            <label for="nom" class="form-label">Nom:</label>
            <input type="text" id="nom" name="nom" class="form-control" value="<?=$nom?>" required>
        </div>
        <div class="mb-3">
            <label for="prenom" class="form-label">Prénom:</label>
            <input type="text" id="prenom" name="prenom" class="form-control" value="<?=$prenom?>" required>
        </div>
        <div class="mb-3">
            <label for="idGroupe" class="form-label">Groupe:</label>
            <select id="idGroupe" name="idGroupe" class="form-control">
                <?php
                $sql = "SELECT * FROM groupe";
                $result = mysqli_query($con, $sql);
                while ($row = mysqli_fetch_assoc($result)):
                ?>
                    <option value="<?=$row['id']?>"><?=$row['nom']?></option>
                <?php endwhile; ?>
            </select>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
    <a href="index.php">Back to list</a>
            
    </div>
</body>
</html>