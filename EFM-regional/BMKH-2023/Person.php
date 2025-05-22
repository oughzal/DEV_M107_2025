<?php
class Person{
    private $CIN;
    private $nom;
    private $prenom;
    private $email;
    private $tel;

    public function __construct($CIN, $nom, $prenom, $email, $tel){
        $this->CIN = $CIN;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
        $this->tel = $tel;
    }
    public function getCIN(){
        return $this->CIN;
    }
    public function setCIN($CIN){
        $this->CIN = $CIN;
    }

    public function __toString() {
        return "CIN: " . $this->CIN . "\n" .
               "Nom: " . $this->nom . "\n" .
               "Prenom: " . $this->prenom . "\n" .
               "Email: " . $this->email . "\n" .
               "Tel: " . $this->tel . "\n";
    }

}
class Salarie extends Person{
    private $salaire;
    private $poste;

    public function __construct($CIN, $nom, $prenom, $email, $tel, $salaire, $poste){
        parent::__construct($CIN, $nom, $prenom, $email, $tel);
        $this->salaire = $salaire;
        $this->poste = $poste;
    }

    public function getSalaire(){
        return $this->salaire;
    }
    public function setSalaire($salaire){
        $this->salaire = $salaire;
    }

    public function __toString()
    {
        return parent::__toString() . "Salaire: " . $this->salaire . "\n" .
               "Poste: " . $this->poste . "\n";
    }

    public function addPrime($prime){
        $this->salaire += $prime;
    }
}

$p = new Person("123456", "John", "Doe", "t@g.com", "123456789");
$s = new Salarie("654321", "Jane", "Doe", "y@a.abc", "987654321", 5000, "Manager");
echo $p;
echo $s;
$s->addPrime(1000);
echo "Salaire après prime: " . $s->getSalaire() . "\n";
?>