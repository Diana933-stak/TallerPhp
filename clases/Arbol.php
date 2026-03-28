<?php
class Nodo {
    public $valor;
    public $izq;
    public $der;

    public function __construct($valor){
        $this->valor = $valor;
        $this->izq = null;
        $this->der = null;
    }
}

class Arbol {

    public function construir($pre, $in){
        if(count($pre) == 0) return null;

        $raizValor = $pre[0];
        $nodo = new Nodo($raizValor);

        $pos = array_search($raizValor, $in);

        if($pos === false) return null;

        $inIzq = array_slice($in, 0, $pos);
        $inDer = array_slice($in, $pos + 1);

        $preIzq = array_slice($pre, 1, count($inIzq));
        $preDer = array_slice($pre, 1 + count($inIzq));

        $nodo->izq = $this->construir($preIzq, $inIzq);
        $nodo->der = $this->construir($preDer, $inDer);

        return $nodo;
    }

    public function imprimir($raiz){

        if(!$raiz) return "Error en los datos";

        $A = $raiz->valor;
        $B = $raiz->izq ? $raiz->izq->valor : " ";
        $C = $raiz->der ? $raiz->der->valor : " ";
        $D = ($raiz->izq && $raiz->izq->izq) ? $raiz->izq->izq->valor : " ";
        $E = ($raiz->izq && $raiz->izq->der) ? $raiz->izq->der->valor : " ";

        return "<pre style='text-align:center; font-size:18px;'>
        $A
      /   \\
     $B     $C
    / \\
   $D   $E
</pre>";
    }
}
?>