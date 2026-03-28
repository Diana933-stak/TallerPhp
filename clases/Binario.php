<?php
class Binario{
    private $num;

    public function __construct($num){
        $this->num=$num;
    }

    public function convertir(){
        return decbin($this->num);
    }
}
?>