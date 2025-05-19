<?php
class A {
    public $id = 0;
    public $nom = "";
    public function __construct($id = 0, $nom = "") {
        $this->id = $id;
        $this->nom = $nom;    
    }

    // toString python : __str__
    public function __toString() {
        return "id: $this->id, nom: $this->nom";
    }
    
}

class B extends A {
    public $prenom = "";
    public function __construct($id = 0, $nom = "", $prenom = "") {
        parent::__construct($id, $nom);
        $this->prenom = $prenom;
    }
    public function __toString() {
        return parent::__toString() . ", prenom: $this->prenom";
    }
}
?>