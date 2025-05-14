<?php
require_once(__DIR__ . '../model/Stagiaire.php');
class stagiaiaireController{

    private $stagiaireModel;

    public function __construct($stagiaireModel)
    {
        $this->stagiaireModel = $stagiaireModel;
    }

    public function index()
    {
        $stagiaires = $this->stagiaireModel->getList();
        include_once(__DIR__ . '../view/stagiaire-index.php');
    }

    public function edit()
    {
        if (isset($_GET['id'])) {
            $stagiaire = $this->stagiaireModel->save((object) $_GET);

        } 
        
        include_once(__DIR__ . '../view/stagiaire-edit.php');
    }   
    
}


?