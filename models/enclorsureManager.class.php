<?php
require_once "Model.class.php";
require_once "enclorsure.class.php";

class EnclosureManager extends Model{
    private $Enclosures;//tableau d'enclosure

    public function addEnclosure($enclosure){
        $this->enclosures[] = $enclosure;
    }

    public function getEnclosures(){
        return $this->Enclosures;
    }

    public function chargementEnclosures(){
        $req = $this->getBdd()->prepare("SELECT * FROM enclosures WHERE idZoo = '1' ");
        $req->execute();
        $myEnclosures = $req->fetchAll(PDO::FETCH_ASSOC);
        $req->closeCursor();

        foreach($myEnclosures as $enclosure){
            $l = new Enclosure($enclosure['idEnclosure'],$enclosure['animalSize'],$enclosure['enclosureSize'],$enclosure['environnement'],$enclosure['vacant'],$enclosure['nbrAnimals'],$enclosure['image']);
            $this->addEnclosure($l);
        }
    }

    public function getEnclosureById($idEnclosure){
        for($i=0; $i < count($this->Enclosures);$i++){
            if($this->Enclosures[$i]->getId() === $idEnclosure){
                return $this->Enclosures[$i];
            }
        }
    }

}