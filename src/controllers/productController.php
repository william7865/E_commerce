<?php
class productController{
    private $product_code;
    private $product_name;
    private $description;
    private $picture;
    private $price;
    private $rating;

    public function __construc($product_code, $product_name, $description, $picture, $price, $rating){
        $this->product_code = $product_code;
        $this->product_name = $product_name;
        $this->description = $description;
        $this->picture = $picture;
        $this->price = $price;
        $this->rating = $rating;
    }
    public function getProduct_code(){
        return $this->product_code;
    }
    public function getProduct_name(){
        return $this->product_name;
    }
    public function getDescription(){
        return $this->description;
    }
    public function getPicture(){
        return $this->picture;
    }
    public function getPrice(){
        return $this->price;
    }
    public function getRating(){
        return $this->rating;
    }
    public function setProduct_code($product_code){
        $this->product_code = $product_code;
    }
    public function setProduct_name($product_name){
        $this->product_name = $product_name;
    }
    public function setDescription($description){
        $this->description = $description;
    }
    public function setPicture($picture){
        $this->picture = $picture;
    }
    public function setPrice($price){
        $this->price = $price;
    }
    public function setRating($rating){
        $this->rating = $rating;
    }
}