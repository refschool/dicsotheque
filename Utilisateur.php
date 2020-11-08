<?php
class Utilisateur {

    protected $nom;
    protected $prenom;

    public function __construct($prenom,$nom){
        $this->prenom = $prenom; 
        $this->nom = $nom;
    }

    public function getNom(){
        return $this->nom;
    }

    public function getPrenom(){ // getter
        return $this->prenom;
    }

    public function getFullName(){
        return $this->prenom . ' ' . $this->nom;
    }

}