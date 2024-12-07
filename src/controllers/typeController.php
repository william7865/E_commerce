<?php
class typeController{
    private $type_code;
    private $type_name;

    public function __construc($type_code, $type_name){
        $this->type_code = $type_code;
        $this->type_name = $type_name;
    }
    public function getType_code(){
        return $this->type_code;
    }
    public function getType_name(){
        return $this->type_name;
    }
    public function setType_code($type_code){
        $this->type_code = $type_code;
    }
    public function setType_name($type_name){
        $this->type_name = $type_name;
    }
}