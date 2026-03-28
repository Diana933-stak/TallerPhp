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
        if(empty($pre)) return null;

        $raiz = $pre[0];
        $nodo = new Nodo($raiz);

        $pos = array_search($raiz, $in);

        $inIzq = array_slice($in, 0, $pos);
        $inDer = array_slice($in, $pos + 1);

        $preIzq = array_slice($pre, 1, count($inIzq));
        $preDer = array_slice($pre, 1 + count($inIzq));

        $nodo->izq = $this->construir($preIzq, $inIzq);
        $nodo->der = $this->construir($preDer, $inDer);

        return $nodo;
    }

    public function altura($nodo){
        if($nodo == null) return 0;
        return 1 + max($this->altura($nodo->izq), $this->altura($nodo->der));
    }

    public function imprimirBonito($raiz){
        $h = $this->altura($raiz);
        $espacio = pow(2, $h);

        $res = "<pre style='text-align:center; font-size:18px;'>";

        for($nivel=1; $nivel <= $h; $nivel++){

            $nodes = $this->getNivel($raiz, $nivel);

            $gap = str_repeat(" ", intval($espacio / pow(2, $nivel)));

            $linea = $gap;

            foreach($nodes as $n){
                $linea .= ($n ? $n : " ") . $gap . $gap;
            }

            $res .= $linea . "\n";

            if($nivel < $h){
                $res .= $this->lineas($nodes, $espacio, $nivel);
            }
        }

        $res .= "</pre>";

        return $res;
    }

    private function getNivel($nodo, $nivel){
        if($nivel == 1){
            return [$nodo ? $nodo->valor : null];
        }

        if($nodo == null){
            return array_merge(
                $this->getNivel(null, $nivel-1),
                $this->getNivel(null, $nivel-1)
            );
        }

        return array_merge(
            $this->getNivel($nodo->izq, $nivel-1),
            $this->getNivel($nodo->der, $nivel-1)
        );
    }

    private function lineas($nodes, $espacio, $nivel){
        $res = "";
        $gap = intval($espacio / pow(2, $nivel+1));

        $line = str_repeat(" ", $gap);

        foreach($nodes as $n){
            if($n){
                $line .= "/" . str_repeat(" ", $gap*2) . "\\";
            } else {
                $line .= str_repeat(" ", $gap*2 + 2);
            }
        }

        return $line . "\n";
    }
}
?>