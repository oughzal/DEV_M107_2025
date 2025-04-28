<?php require_once('./connection.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des stagiaire</title>
    <link rel="stylesheet" href="../assets/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/font-awesome.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Liste des stagiaires</h1>
        <a href="edit.php" class="btn btn-primary mb-3">Ajouter un stagiaire</a>
        <table class="table table-bordered table-striped mt-4">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Groupe</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            <?php
            $sql = "SELECT s.*,g.nom as groupe FROM stagiaire s join groupe g on s.idGroupe = g.id";
            $result = mysqli_query($con, $sql);
            while($row = mysqli_fetch_assoc($result)):
            ?>
                <tr>
                    <td><?=$row["id"]?></td>
                    <td><?=$row["nom"]?></td>
                    <td><?=$row["prenom"]?></td>
                    <td><?=$row["groupe"]?></td>
                    <td class="text-end">
                        <a href="edit.php?id=<?=$row['id']?>"><i class="fa fa-edit"></i></a>
                        <a href="delete.php?id=<?=$row['id']?>" ><i class="fa fa-trash"></i> </a>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
  

    <script src="../assets/bootstrap.bundle.min.js"></script>
    
</body>
</html>