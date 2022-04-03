<?php
require_once "models/enclosureManager.class.php";

class EnclosuresController{
    private $enclosureManager;

    public function __construct(){
        $this->enclosureManager = new EnclosureManager;
        $this->enclosureManager->chargementEnclosures();
    }

    public function viewEnclosures(){
        $livres = $this->enclosureManager->getEcnlosures();
        require "views/enclosures.view.php";
    }

    public function viewEnclosure($id){
        $livres = $this->enclosureManager->getEnclosureById($id);
        require "views/viewEnclosure.view.php";
    }

    
}