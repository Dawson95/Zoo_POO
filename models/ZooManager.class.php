<?php
require_once "Model.class.php";
require_once "zoo.class.php";

class ZooManager extends Model{
    private $zoos; //tableau de zoo 

    public function addZoo($zoo){
        $this->zoos[] = $zoo;
    }

    public function getZoos(){
        return $this->zoos;
    }

    public function chargementZoos(){
        $req = $this->getBdd()->prepare("SELECT * FROM zoo");
        $req->execute();
        $mesZoos = $req->fetchAll(PDO::FETCH_ASSOC);
        $req->closeCursor();

        foreach($mesZoos as $zoo){
            $l = new Zoo($zoo['id'],$zoo['name'],$livre['nbrAnimals']);
            $this->addZoo($l);
        }
    }
}