<?php

class Car{

    public $brand;
    private $mileage = 0;


    function __construct($b, $m) {
        $this->brand = $b;
        $this->mileage = $m;
    }

    function __destruct() {
        echo $this->brand . " is dead!\n";
    }

    public function makeNoise() {
        echo "Beep, Beep!!\n";
    }
}
?>