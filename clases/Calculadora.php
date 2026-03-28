<?php
abstract class Calc{
    abstract public function operar($a,$b);
}

class Suma extends Calc{
    public function operar($a,$b){return $a+$b;}
}
class Resta extends Calc{
    public function operar($a,$b){return $a-$b;}
}
class Multiplicacion extends Calc{
    public function operar($a,$b){return $a*$b;}
}
class Division extends Calc{
    public function operar($a,$b){return $b!=0?$a/$b:"Error";}
}
?>