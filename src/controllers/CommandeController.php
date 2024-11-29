<?php
class CommandController {
    private $status;
    private $total;

    public function __construc($status, $total){
        $this->status = $status;
        $this->total = $total;
    }
    public function getStatus(){
        return $this->status;
    }
    public function getTotal(){
        return $this->total;
    }
    public function setStatus($status){
        $this->status = $status;
    }
    public function setTotal($total){
        $this->total = $total;
    }
}