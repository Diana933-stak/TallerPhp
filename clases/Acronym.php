<?php
class Acronym{
    private $frase;

    public function __construct($frase){
        $this->frase=$frase;
    }

    public function generar(){
        $palabras=preg_split("/[\s-]+/",$this->frase);
        $res="";
        foreach($palabras as $p){
            if($p!="") $res.=strtoupper($p[0]);
        }
        return $res;
    }
}
?>