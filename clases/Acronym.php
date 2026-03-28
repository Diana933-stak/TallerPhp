<?php
class Acronym{
    private $frase;

    public function __construct($frase){
        $this->frase=$frase;
    }

    public function generar(){
        $limpio=preg_replace("/[^a-zA-Z -]/","",$this->frase);
        $palabras=preg_split("/[\s-]+/",$limpio);

        $acro="";
        foreach($palabras as $p){
            $acro.=strtoupper($p[0]);
        }
        return $acro;
    }
}
?>