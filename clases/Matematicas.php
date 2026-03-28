<?php
abstract class Operacion{
    abstract public function calcular($n);
}

class Fibonacci extends Operacion{
    public function calcular($n){
        $serie=[0,1];
        for($i=2;$i<$n;$i++){
            $serie[$i]=$serie[$i-1]+$serie[$i-2];
        }
        return $serie;
    }
}

class Factorial extends Operacion{
    public function calcular($n){
        $res=1;
        for($i=1;$i<=$n;$i++){
            $res*=$i;
        }
        return $res;
    }
}
?>