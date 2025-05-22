<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../assets/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <a href="addPC.php" class="btn btn-primary">Ajouter PC</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Marque</th>
                    <th scope="col">RAM</th>
                    <th scope="col">stockage</th>
                    <th scope="col">prix</th>
                    <th scope="col">image</th>
                    <th scope="col">action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include_once("connexion.php");
                $query = "SELECT * FROM pc";
                $result = mysqli_query($con, $query);
                while($row = mysqli_fetch_assoc($result)):?>
                    <tr>
                        <th scope="row"><?php echo $row['idPC'];?></th>
                        <td><?=$row['marque'];?></td>
                        <td><?=$row['Ram'];?></td>
                        <td><?=$row['stockage'];?></td>
                        <td><?=$row['prix'];?></td>
                        <td><img src="<?=$row['image'];?>" alt="" width="100px"></td>
                        <td>
                            <a href="editPC.php?id=<?=$row['idPC'];?>" class="btn btn-warning">Edit</a>
                            <a href="deletePC.php?id=<?=$row['idPC'];?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                <?php endwhile;?>
            </tbody>
        </table>
    </div>
    
</body>
</html>