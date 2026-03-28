<?php
class Estadistica{
    private $nums;

    public function __construct($nums){
        $this->nums=$nums;
    }

    public function promedio(){
        return array_sum($this->nums)/count($this->nums);
    }

    public function media(){
        sort($this->nums);
        $n=count($this->nums);
        return ($n%2==0)?
        ($this->nums[$n/2]+$this->nums[$n/2-1])/2:
        $this->nums[floor($n/2)];
    }

    public function moda(){
        $val=array_count_values($this->nums);
        return array_keys($val,max($val));
    }
}
?>