<?php 

abstract class user {
    public $nom;
    public $prenom;

    abstract public function nomcomplet();

    abstract public function lastname();


}

class Apprenant extends user {
    public $note;

    public function __construct($nom, $prenom,$note) {
        $this->note = $note;
        $this->nom=$nom;
        $this->prenom=$prenom;
    }

    public function nomcomplet(){
        echo $this->nom;
        echo $this->prenom;
    }

    public function lastname(){
        echo $this->nom;
    }
}

    // $exemple = new Apprenant("hiba; 'begh", "17");

    

