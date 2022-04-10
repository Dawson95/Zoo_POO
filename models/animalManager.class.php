<?php
require_once "Model.class.php";
require_once "animal.class.php";

class AnimalManager extends Model{
    private $animals;//tableau d'animaux

    public function addAnimal($animal){
        $this->animals[] = $animal;
    }

    public function getAnimals(){
        return $this->animals;
    }

    public function chargementAnimals(){
        $req = $this->getBdd()->prepare("SELECT * FROM animals");
        $req->execute();
        $myAnimals = $req->fetchAll(PDO::FETCH_ASSOC);
        $req->closeCursor();

        foreach($myAnimals as $animal){
            $l = new Animal($animal['id'],$animal['name'],$animal['age'],$animal['species'],$animal['entryDate'],$animal['gender'],$animal['photo'],$animal['diet'],$animal['treatment'],$animal['environnement'],$animal['deathDate'],$animal['information']);
            $this->addAnimals($l);
        }
    }

    public function getAnimalById($id){
        for($i=0; $i < count($this->animals);$i++){
            if($this->animals[$i]->getId() === $id){
                return $this->animals[$i];
            }
        }
    }

    
}