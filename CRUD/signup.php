<?php
require_once('./connection.php');
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $login = $_POST['login'];
    $password = sha1($_POST['password']);
    $passwordConfirme = sha1($_POST['passwordConfirme']);

    if ($password === $passwordConfirme) {
        $sql = "INSERT INTO user (nom, prenom, login, password) VALUES ('$firstName', '$lastName', '$login', '$password')";
        if (mysqli_query($con, $sql)) {
            header("Location: login.php");
    
        }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include_once('./styles.php'); ?>
</head>
<body>
    <div class="container">
        <h1>SignUp</h1>
        <form action="?" method="POST" class="container mt-4">
            <div class="mb-3">
                <label for="login" class="form-label">First Name:</label>
                <input type="text" id="firstName" name="firstName" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="login" class="form-label">Last Name:</label>
                <input type="text" id="lastName" name="lastName" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="login" class="form-label">Login:</label>
                <input type="text" id="login" name="login" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password:</label>
                <input type="password" id="password" name="password" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password confirme:</label>
                <input type="password" id="passwordConfime" name="passwordConfirme" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">SignUp</button>
    </div>
</body>
</html>