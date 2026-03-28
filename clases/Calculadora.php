<?php
abstract class Operacion{
    abstract public function calcular($a,$b);
}

class Suma extends Operacion{
    public function calcular($a,$b){ return $a+$b; }
}

class Resta extends Operacion{
    public function calcular($a,$b){ return $a-$b; }
}

class Multiplicacion extends Operacion{
    public function calcular($a,$b){ return $a*$b; }
}

class Division extends Operacion{
    public function calcular($a,$b){
        return $b!=0?$a/$b:"Error";
    }
}
?>