<?php
class brandController{
    private $brand_code;
    private $brand_name;

    public function __construc($brand_code, $brand_name){
        $this->brand_code = $brand_code;
        $this->brand_name = $brand_name;
    }
    public function getBrand_code(){
        return $this->brand_code;
    }
    public function getBrand_name(){
        return $this->brand_name;
    }
    public function setBrand_code($brand_code){
        $this->brand_code = $brand_code;
    }
    public function setBrand_name($brand_name){
        $this->brand_name = $brand_name;
    }
}