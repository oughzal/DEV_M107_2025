<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../assets/bootstrap.min.css">

<body>
    <div class="container mt-5">
        <h1>Inscription vendeur</h1>
        <form action="actionInscriptionVendeur.php" method="post">
        <input type="text" class="form-control" placeholder="addresse email" name="email" id="email"><br>
        <input type="text" class="form-control" placeholder="nom" name="nom" id="nom"><br>
        <input type="text" class="form-control" placeholder="prenom" name="prenom" id="prenom"><br>
        <input type="text" class="form-control" placeholder="Numéro téléphone" name="tel" id="tel"><br>
        <input type="password" class="form-control" placeholder="password" name="password" id="password confirm"><br>
        <input type="password" class="form-control" placeholder="password" name="passwordConfirm" id="passwordConfirm"><br>
        <input type="submit" class="btn btn-primary" value="s'inscrire" name="submit" id="submit"><br>
        </form>
    </div>
</body>
</html>