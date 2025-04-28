<?php
header("Content-Type: application/json; charset=UTF-8");
// créer une connexion Mysqli
$con = mysqli_connect("localhost","root","root","php",33066);

// exécuter une requête SQL
$sql = " select * from stagiaire";
$result = mysqli_query($con,$sql);
$L = [];
while($row = mysqli_fetch_assoc($result)){
    $L[] = $row;
}
echo json_encode($L);
?>