<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if(isset($_COOKIE["user"])):
    // setcookie("user", "DEV101", time() + 300 ); //
        ?>
    <h1><?=$_COOKIE["user"]?></h1>
    <?php else: ?>
    <h1>Pas de cookie</h1>
    <?php endif; ?>
</body>
</html>