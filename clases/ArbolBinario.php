<?php
class Nodo{
    public $valor;
    public $izq;
    public $der;

    public function __construct($v){
        $this->valor=$v;
    }
}

class ArbolBinario{

    public function construir($pre,$in){
        if(empty($pre)) return null;

        $raizVal=array_shift($pre);
        $raiz=new Nodo($raizVal);

        $i=array_search($raizVal,$in);

        $izqIn=array_slice($in,0,$i);
        $derIn=array_slice($in,$i+1);

        $raiz->izq=$this->construir($pre,$izqIn);
        $raiz->der=$this->construir($pre,$derIn);

        return $raiz;
    }

    public function postorden($n){
        if(!$n) return [];
        return array_merge(
            $this->postorden($n->izq),
            $this->postorden($n->der),
            [$n->valor]
        );
    }
}
?>