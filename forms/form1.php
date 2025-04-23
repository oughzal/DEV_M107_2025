<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="form1.php?name=dev&email=email@gmail.com" method="POST" enctype="multipart/form-data">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" value="name1"><br><br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" value="test@gmail.com"><br><br>
        <input type="file" id="file" name="file"><br><br>
        <input type="submit" value="Submit">
    </form>
    <a href="form1.php?name=dev&email=email@gmail.com">Envoyer</a>
    <br>
    <?php
    if(isset($_REQUEST['name'])) {
        $nom = trim($_REQUEST['name']);
        echo "<h1>$nom</h1>";
        echo "<h1>$_REQUEST[email]</h1>";
        if(isset($_FILES['file']) && $_FILES['file']['error'] == UPLOAD_ERR_OK) {
            copy($_FILES['file']['tmp_name'],__DIR__ ."/".basename( $_FILES['file']['name']));
        } 
    } 
    echo "<h1>$_SERVER[REQUEST_METHOD]</h1>";
   

    ?>
</body>
</html>