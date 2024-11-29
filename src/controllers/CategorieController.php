<?php
class CategorieController{
    private $nom;

    public function __construc($nom){
        $this->nom = $nom;
    }
    public function getNom(){
        return $this->nom;
    }
    public function setNom($nom){
        $this->nom = $nom;
    }
}