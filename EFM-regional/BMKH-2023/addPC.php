<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add PC</title>
    <link rel="stylesheet" href="../../assets/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Ajouter un PC</h1>
        <form action="actionAddPC.php" method="post" enctype="multipart/form-data">
            <input type="text" class="form-control" placeholder="Marque" name="marque" id="marque"><br>
            <input type="text" class="form-control" placeholder="RAM" name="ram" id="ram"><br>
            <input type="text" class="form-control" placeholder="Stockage" name="stockage" id="stockage"><br>
            <input type="text" class="form-control" placeholder="Prix" name="prix" id="prix"><br>
            <input type="file" class="form-control-file" name="image" id="image"><br>
            <input type="submit" class="btn btn-primary" value="Ajouter PC">
        </form>
    </div> 
</body>
</html>