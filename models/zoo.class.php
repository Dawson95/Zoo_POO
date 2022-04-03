<?php

class Zoo{
    private $id;
    private $name;
    private $nbrAnimals;

    public function __construct($id,$name,$nbrAnimals){
        $this->id = $id;
        $this->name = $name;
        $this->nbrAnimals = $nbrAnimals;
    }
    
    public function getId(){return $this->id;}
    public function setId($id){$this->id = $id;}
    
    public function getName(){return $this->name;}
    public function setName($name){$this->name = $name;}

    public function getNbrAnimals(){return $this->nbrAnimals;}
    public function setNbrAnimals($nbrAnimals){$this->nbrAnimals = $nbrAnimals;}

}