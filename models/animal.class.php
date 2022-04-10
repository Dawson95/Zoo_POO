<?php
require_once "../traits/name.trait.php";


abstract class Animal{
    use getName;
    private $id;
    private $name;
    private $age;
    private $species; 
    private $entryDate;
    private $gender;
    private $idParent;
    private $photo = "default";
    private $diet;
    private $treatment;
    private $environnement;
    private $deathDate;
    private $information;
    private $idFavHealer;
    private $idEnclosure;
    static $nbrAnimals = 0;

    public function __construct(){
        $this->name = $name;
        $this->age = $age;
        $this->species = $species;
        $this->entryDate = $entryDate;
        $this->gender = $gender;
        $this->idParent = $idParent;
        $this->diet = $diet;
        addAnimal();
    }

    function __destruct() {
        print "Destroying " . __CLASS__ . "\n";
    }



    

    public function getAge(){return $this->age;}
    public function setAge($age){$this->age = $age;}

    public function getSpecies(){return $this->species;}
    public function setSpecies($species){$this->species = $species;}

    public function getEntryDate(){return $this->entryDate;}
    public function setEntryDate($entryDate){$this->entryDate = $entryDate;}

    public function getGender(){return $this->gender;}
    public function setGender($gender){$this->gender = $gender;}

    public function getIdParent(){return $this->idParent;}
    public function setIdParent($idParent){$this->idParent = $idParent;}

    public function getPhoto(){return $this->photo;}
    public function setPhoto($photo){$this->photo = $photo;}

    public function getDiet(){return $this->diet;}
    public function setDiet($diet){$this->diet = $diet;}

    public function getTreatment(){return $this->treatment;}
    public function setTreatment($treatment){$this->treatment = $treatment;}

    public function getEnvironnement(){return $this->environnement;}
    public function setEnvironnement($environnement){$this->environnement = $environnement;}

    public function getDeathDate(){return $this->deathDate;}
    public function setDeathDate($deathDate){$this->deathDate = $deathDate;}

    public function getInformation(){return $this->information;}
    public function setInformation($information){$this->information = $information;}

    public function addAnimal(){
        self::$nbrAnimals += 1;
    }
}