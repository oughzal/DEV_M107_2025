<?php

function seConnecter(){
    return mysqli_connect("localhost", "root","pwd@123","db_parc-auto");
}

function ajouterVoiture($immat,$marque, $modele, $date_mise_en_circulation){
    $con = seConnecter();
    $query = "INSERT INTO voitures (immat, marque, modele, date_mise_en_circulation) VALUES ('$immat', '$marque', '$modele', '$date_mise_en_circulation')";
    mysqli_query($con, $query);
}
 
function supprimerVoiture($immat){
    $con = seConnecter();
    $query = "DELETE FROM voitures WHERE immat = '$immat'";
    mysqli_query($con, $query);

}
function missions_voiture($immat){
    $con = seConnecter();
    $query = "SELECT numero FROM missions WHERE immat = '$immat'";
    $result = mysqli_query($con, $query);
    $out =[];
    while($row = mysqli_fetch_assoc($result)){
        $out[] = $row['numero'];
    } 

    return $out;
}
?>