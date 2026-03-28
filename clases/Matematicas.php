<?php
class Matematicas{

    public function fibonacci($n){
        $a=0; $b=1;
        $serie=[];

        for($i=0;$i<$n;$i++){
            $serie[]=$a;
            $temp=$a+$b;
            $a=$b;
            $b=$temp;
        }

        return implode(" → ", $serie);
    }
    public function factorial($n){
        $resultado = 1;
        $pasos = [];

        for($i=1;$i<=$n;$i++){
            $resultado *= $i;
            $pasos[] = $i;
        }

        return implode(" × ", $pasos) . " = " . $resultado;
    }
}
?>