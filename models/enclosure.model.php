<?php
class Enclosure{
    private $idEnclosure;
    private $animalSize;
    private $enclosureSize;
    private $environnement;
    private $vacant;
    private $nbrAnimals;
    private $image;

    public function __construct($idEnclosure,$animalSize,$enclosureSize,$environnement,$environnement,$environnement,$image){
        
        $this->animalSize = $animalSize;
        $this->enclosureSize = $enclosureSize;
        $this->environnement = $environnement;
        $this->vacant = $vacant;
        $this->nbrAnimals = $nbrAnimals;
        $this->image = $image;
    }

    public function getId(){return $this->idEnclosure;}
    public function setId($idEnclosure){$this->idEnclosure = $idEnclosure

    public function getAnimalSize(){return $this->animalSize;}
    public function setAnimalSize($animalSize){$this->animalSize = $animalSize;}

    public function getEnclosureSize(){return $this->enclosureSize;}
    public function setEnclosureSize($enclosureSize){$this->enclosureSize = $enclosureSize;}

    public function getEnvironnement(){return $this->environnement;}
    public function setEnvironnement($environnement){$this->environnement = $environnement;}

    public function getVacant(){return $this->vacant;}
    public function setVacant($vacant){$this->vacant = $vacant;}

    public function getNbrAnimals(){return $this->nbrAnimals;}
    public function setNbrAnimals($nbrAnimals){$this->nbrAnimals = $nbrAnimals;}

    public function getImage(){return $this->image;}
    public function setImage($image){$this->image = $image;}
}