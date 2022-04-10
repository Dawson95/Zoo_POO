<?php

abstract class Animal{
    private $id;
    private $name;
    private $age;
    private $species; 
    private $entryDate;
    private $gender;
    private $idParent;
    private $photo;
    private $diet;
    private $treatment;
    private $environnement;
    private $deathDate;
    private $information;
    private $idFavHealer;
    private $idEnclosure;

    public function getName(){return $this->name;}
    public function setName($name){$this->name = $name;}

    public function getAge(){return $this->age;}
    public function setAge($age){$this->age = $age;}

    public function getSpecies(){return $this->species;}
    public function setSpecies($species){$this->species = $species;}


}