<?php 

final class Dog extends Animal{
    private $breed;

    public function getBreed(){return $this->breed;}
    public function setBreed($breed){$this->breed = $breed;}

}