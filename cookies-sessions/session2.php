<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    session_start();
     if(isset($_SESSION["user"])):
    
        ?>
    <h1><?=$_SESSION["user"]?></h1>
    <?php else: ?>
    <h1>Pas de Session</h1>
    <?php endif; ?>
</body>
</html>