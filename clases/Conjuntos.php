<?php
class Conjuntos{

    public static function union($A,$B){
        return array_unique(array_merge($A,$B));
    }

    public static function interseccion($A,$B){
        return array_intersect($A,$B);
    }

    public static function diferencia($A,$B){
        return array_diff($A,$B);
    }
}
?>