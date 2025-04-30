<?php
session_start();
if (isset($_SESSION['userID'])) {
    header('Location: ./index.php');
    exit;
}
if($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_once('./connection.php');
    $login = $_POST['login'];
    $password = sha1($_POST['password']);
    $sql = "SELECT * FROM user WHERE login = '$login' AND password = '$password'";
    $result = mysqli_query($con, $sql);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['userID'] = $row['id'];
        setcookie('userID', $row['id'], time() + 10*60); // 86400 = 1 day
        header('Location:index.php');
        exit;
    } 
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <?php include_once('./styles.php'); ?>
</head>
<body>
  <div class="conainter">
    <h1 class="text-center">Login</h1>
    <form action="?" method="POST" class="container mt-4">
        <div class="mb-3">
            <label for="login" class="form-label">Login:</label>
            <input type="text" id="login" name="login" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password:</label>
            <input type="password" id="password" name="password" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
    </form>
  </div>  
</body>
</html>