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

    public function __construct($id,$name,$age,$species,$entryDate,$gender,$idParent,$photo,$diet,$treatment,$environnement,$deathDate,$information){
        $this->name = $name;
        $this->age = $age;
        $this->species = $species;
        $this->entryDate = $entryDate;
        $this->gender = $gender;
        $this->idParent = $idParent;
        $this->diet = $diet;
        

    }
}