<?php
$mysqli = new mysqli("localhost","root","root","php",33066);
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
$sql = "SELECT * FROM stagiaire";
$result = $mysqli->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - nom: " . $row["nom"]. " - prenom: " . $row["prenom"]. "<br>";
    }
} else {
    echo "0 results";
}

?>