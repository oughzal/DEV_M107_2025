<?php
class Salarie{
    private $matricule;
    private $nomComplet;
    private $salaire;
    private static $tauxCS;

    // function __construct() {
    //     $this->matrcule = 0;
    //     $this->nomComplet = "";
    //     $this->salaire = 0;

    // }
        function __construct($m=1,$n="dev",$s=2) {
        $this->matrcule = $m;
        $this->nomComplet = $n;
        $this->salaire = $s;

    }

    public function afficher(){
        echo "<p>Matricule : $this->matricule</p>\n";
        echo "<p>nom Complet : $this->nomComplet</p>\n";
        echo "<p>salaire : $this->salaire</p>\n";
        echo "<p>tauxCS : ".self::$tauxCS."</p>\n";
    }

    // toString python : __str_
    public function __toString(){
        return "Matricule : $this->matricule, nom Complet : $this->nomComplet, salaire : $this->salaire";
    }

    public function getMatricule(){
        return $this->matricule;
    }
    public function setMatricule($m){
        $this->matricule = $m;
    }
    public function getNomComplet(){
        return $this->nomComplet;
    }
    public function setNomComplet($n){
        $this->nomComplet = $n;
    }
    public function getSalaire(){
        return $this->salaire;
    }
    public function setSalaire($s){
        $this->salaire = $s;
    }
    public static function getTauxCS(){
        return self::$tauxCS;
    }
    public static function setTauxCS($t){
        self::$tauxCS = $t;
    }

    public function calculerCS(){
        return $this->salaire * self::$tauxCS;
    }
    
}

$s = new Salarie();
$s->setMatricule(1);
$s->setNomComplet("dev");
$s->afficher();

?>