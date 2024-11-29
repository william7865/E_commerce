<?php
class UtilisateurController {
    private $prenom;
    private $nom;
    private $email;
    private $telephone;
    private $mot_de_passe;

public function __construc($prenom, $nom, $email, $telephone, $mot_de_passe){
    $this->prenom = $prenom;
    $this->nom = $nom;
    $this->email = $email;
    $this->telephone = $telephone;
    $this->mot_de_passe = $mot_de_passe;
    }
    public function getPrenom(){
        return $this->prenom;
    }
    public function getNom(){
        return $this->nom;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getTelephone(){
        return $this->telephone;
    }
    public function getMotDePasse(){
        return $this->mot_de_passe;
    }
    public function setPrenom($prenom){
        $this->prenom = $prenom;
    }
    public function setNom($nom){
        $this->nom = $nom;
    }
    public function setEmail($email){
        $this->email = $email;
    }
    public function setTelephone($telephone){
        $this->telephone = $telephone;
    }
}