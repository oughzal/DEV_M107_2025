<?php
 class Person{
    //déclaration des attributs
    public $id;
    public $nom; // attribut d'instance
    private $prenom;
    private $CIN;
    private static $cmp = 0; // attribut de classe

    function getPrenom(){
        return $this->prenom;
    }

    function setPrenom($value){
        $this->prenom = $value;
    }

    function _get($attribut){
        switch($attribut){
            case "nom" : return $this->nom;
            case "prenom" : return $this->prenom;
            default : return false;
        }
    }
    function _set($attr,$value){
        switch($attr){
            case "nom" : $this->nom = $value;break;
            case "prenom" : $this->prenom = $value;break;
            default : return;
        }
    }

    public function __construct($nom,$prenom)
    {
       $this->nom = $nom;
       $this->prenom = $prenom;
       Person::$cmp++;
       $this->id = Person::$cmp;
    }
  
    function __toString()
    {
        return "nom : ".$this->nom."\nprénom :".$this->prenom."<br>";
    }

    //declaration des méthodes
    public function afficher(){
        echo $this->nom ." ". $this->prenom ." ". Person::$cmp;
    }
 }

 class Stagiaire extends Person{
    public $CEF;

    public function __construct($nom,$prenom,$cef){
        parent::__construct($nom, $prenom); // supper()
        $this->CEF = $cef;
        
    }
    public function afficher()
    {
        parent::afficher();
        echo $this->CEF;
    }
 }

 $p1 = new Person("nom1","prénom1");
//  echo $p1->afficher();
//  echo class_exists("Person");
 $s = serialize($p1);
 echo $s;
?>