<?php
class StagiaireModel
{
    private $id;
    private $nom;
    private $prenom;
    private $idGroupe;

    public function __construct($id, $nom, $prenom, $idGroupe)
    {
        $this->id = $id;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->idGroupe = $idGroupe;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }

    public function getIdGroupe()
    {
        return $this->idGroupe;
    }

    public function getList()
    {
        global $con;
        $sql = "SELECT s.*,g.nom as groupe FROM stagiaire s join groupe g on s.idGroupe = g.id";
        $result = mysqli_query($con, $sql);
        $stagiaires = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $stagiaires[] = new Stagiaire($row['id'], $row['nom'], $row['prenom'], $row['idGroupe']);
        }
        return $stagiaires;
    }

    public function save($stagiaire){
        global $con;
        if ($stagiaire->getId() == null) {
            $sql = "INSERT INTO stagiaire (nom, prenom, idGroupe) VALUES ('" . $stagiaire->getNom() . "', '" . $stagiaire->getPrenom() . "', '" . $stagiaire->getIdGroupe() . "')";
        } else {
            $sql = "UPDATE stagiaire SET nom='" . $stagiaire->getNom() . "', prenom='" . $stagiaire->getPrenom() . "', idGroupe='" . $stagiaire->getIdGroupe() . "' WHERE id=" . $stagiaire->getId();
        }
        mysqli_query($con, $sql);
    }
}


?>