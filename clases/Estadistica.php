<?php
class Estadistica{
    private $nums;

    public function __construct($nums){
        $this->nums = array_map('trim', $nums);
    }

    public function promedio(){
        $nums = array_map('floatval', $this->nums);
        return array_sum($nums) / count($nums);
    }

    public function media(){
        $nums = array_map('floatval', $this->nums);
        sort($nums);
        $n = count($nums);

        if($n % 2 == 0){
            return ($nums[$n/2 - 1] + $nums[$n/2]) / 2;
        } else {
            return $nums[floor($n/2)];
        }
    }

    public function moda(){
        $enteros = array_map('intval', $this->nums);
        $conteo = array_count_values($enteros);

        if(empty($conteo)){
            return ["Sin datos"];
        }

        $max = max($conteo);

        $modas = [];
        foreach($conteo as $num => $freq){
            if($freq == $max){
                $modas[] = $num;
            }
        }

        return $modas;
    }
}
?>