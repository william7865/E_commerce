<?php
class ArticleController{
    private $titre;
    private $contenu;
    private $image;
    private $date_ajout;

    public function __construc($titre, $contenu, $image, $date_ajout){
        $this->titre = $titre;
        $this->contenu = $contenu;
        $this->image = $image;
        $this->date_ajout = $date_ajout;
    }
    public function getTitre(){
        return $this->titre;
    }
    public function getContenu(){
        return $this->contenu;
    }
    public function getImage(){
        return $this->image;
    }
    public function getDate_ajout(){
        return $this->date_ajout;
    }
    public function setTitre($titre){
        $this->titre = $titre;
    }
    public function setContenu($contenu){
        $this->contenu = $contenu;
    }
    public function setImage($image){
        $this->image = $image;
    }
    public function setDate_ajout($date_ajout){
        $this->date_ajout = $date_ajout;
    }

}