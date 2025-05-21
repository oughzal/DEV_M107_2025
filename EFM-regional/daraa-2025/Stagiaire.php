<?php
require_once "Person.php";
class Stagiaire extends Person{
    public $notes = [];

    public function __construct($nom, $prenom, $age){
        parent::__construct($nom, $prenom, $age);
    }

    public function afficherNotes(){
        foreach($this->notes as $note){
            echo $note . "<br>";
        }
    }

}

$stagiaire = new Stagiaire("Doe", "John", 20);
$stagiaire->notes = [15, 18, 20];
$stagiaire->afficherNotes();
?>