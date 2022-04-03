<?php
require_once "models/ZooManager.class.php";

class ZoosController{
    private $zooController;

    public function __construct(){
        $this->livreManager = new ZooManager;
        $this->livreManager->chargementZoos();
    }

    public function afficherZoos(){
        $livres = $this->ZooManager->getZoos();
        require "views/zoos.view.php";
    }
}