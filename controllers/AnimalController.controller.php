<?php
require_once "models/animalManager.class.php";

class AnimalsController{
    private $animalManager;

    public function __construct(){
        $this->animalManager = new AnimalManager;
        $this->AnimalManager->chargementAnimal();
    }

    public function viewAnimals(){
        $animals = $this->animalManager->getAnimals();
        require "views/animals.view.php";
    }

    public function viewAnimal($id){
        $animals = $this->animalManager->getAnimalById($id);
        require "views/viewAnimal.view.php";
    }

    
}