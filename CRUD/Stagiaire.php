<?php
class Stagiaire {
    private $id;
    private $nom;
    private $prenom;
    private $idGroupe;
    private $dateNaissance;

    public function __construct($id, $nom, $prenom, $idGroupe) {
        $this->id = $id;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->idGroupe = $idGroupe;
    }

    public function getId() {
        return $this->id;
    }

    public function getNom() {
        return $this->nom;
    }

    public function getPrenom() {
        return $this->prenom;
    }

    public function getIdGroupe() {
        return $this->idGroupe;
    }
}
class StagiaireManager {
    private $connection;

    public function __construct($connection) {
        $this->connection = $connection;
    }

    public function getAllStagiaires() {
        $sql = "SELECT s.*, g.nom as groupe FROM stagiaire s JOIN groupe g ON s.idGroupe = g.id";
        $result = mysqli_query($this->connection, $sql);
        $stagiaires = [];

        while ($row = mysqli_fetch_assoc($result)) {
            $stagiaires[] = new Stagiaire($row['id'], $row['nom'], $row['prenom'], $row['idGroupe']);
        }

        return $stagiaires;
    }
    
    function getStagiaireById() {
        if (!isset($_GET['id'])) {
            return null;
        }
        $id = $_GET['id'];
        $sql = "SELECT * FROM stagiaire WHERE id = $id";
        $result = mysqli_query($this->connection, $sql);
        if ($row = mysqli_fetch_assoc($result)) {
            return new Stagiaire($row['id'], $row['nom'], $row['prenom'], $row['idGroupe']);
        }
        return null;
    }
    function addStagiaire() {
        if (!isset($_POST['nom']) || !isset($_POST['prenom']) || !isset($_POST['idGroupe'])) {
            return false;
        }
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $idGroupe = $_POST['idGroupe'];
        
        $sql = "INSERT INTO stagiaire (nom, prenom, idGroupe) VALUES ('$nom', '$prenom', $idGroupe)";
        return mysqli_query($this->connection, $sql);
    }

}


?>