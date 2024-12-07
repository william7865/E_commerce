<?php
class categoryController{
    private $category_code;
    private $category_name;
    private $picture;
    private $subtitles;
    private $home_order;

    public function __construc($category_code, $category_name, $picture, $subtitles, $home_order){
        $this->category_code = $category_code;
        $this->category_name = $category_name;
        $this->picture = $picture;
        $this->subtitles = $subtitles;
        $this->home_order = $home_order;
    }
    public function getCategory_code(){
        return $this->category_code;
    }
    public function getCategory_name(){
        return $this->category_name;
    }
    public function getPicture(){
        return $this->picture;
    }
    public function getSubtitles(){
        return $this->subtitles;
    }
    public function getHome_order(){
        return $this->home_order;
    }
    public function setCategory_code($category_code){
        $this->category_code = $category_code;
    }
    public function setCategory_name($category_name){
        $this->category_name = $category_name;
    }
    public function setPicture($picture){
        $this->picture = $picture;
    }
    public function setSubtitles($subtitles){
        $this->subtitles = $subtitles;
    }
    public function setHome_order($home_order){
        $this->home_order = $home_order;
    }
}