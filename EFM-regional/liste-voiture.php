<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>liste voitures</title>
    <link rel="stylesheet" href="../../assets/bootstrap.min.css">
    <script src="../../assets/bootstrap.bundle.js"></script>
</head>
<body>
    <div class="container">
        <h1>Liste des voitures</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Immatriculation</th>
                    <th scope="col">Marque</th>
                    <th scope="col">Modèle</th>
                    <th scope="col">Date de mise en circulation</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'partie2.php';
                $con = mysqli_connect("localhost", "root", "pwd@123", "db_parc-auto");
              
                $query = "SELECT * FROM voitures";
                $result = mysqli_query($con, $query);
                while ($row = mysqli_fetch_assoc($result)): ?>
                    <tr>
                        <td><?= $row['immat'] ?></td>
                        <td><?= $row['marque'] ?></td>
                        <td><?= $row['modele'] ?></td>
                        <td><?= $row['date_mise_en_circulation'] ?></td>
                        <td>
                            <a href="modifier.php?immat=<?= $row['immat'] ?>" class="btn btn-primary">Modifier</a>
                            <a href="supprimer.php?immat=<?= $row['immat'] ?>" class="btn btn-danger">Supprimer</a>
                      
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>
</html>