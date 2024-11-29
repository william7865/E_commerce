<?php
class RoleController {
    private $Admin;
    private $Moderateur;
    private $Utilisateur;

    public function __construc($Admin, $Moderateur, $Utilisateur){
        $this->Admin = $Admin;
        $this->Moderateur = $Moderateur;
        $this->Utilisateur = $Utilisateur;
    }
    public function getAdmin(){
        return $this->Admin;
    }
    public function getModerateur(){
        return $this->Moderateur;
    }
    public function getUtilisateur(){
        return $this->Utilisateur;
    }
    public function setAdmin($Admin){
        $this->Admin = $Admin;
    }
    public function setModerateur($Moderateur){
        $this->Moderateur = $Moderateur;
    }
    public function setUtilisateur($Utilisateur){
        $this->Utilisateur = $Utilisateur;
    }
}