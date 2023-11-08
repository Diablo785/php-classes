<?php

 abstract class Animal{
    public $name;
    private $age = 0;


    function birthday(){
        $this->age++;
    }

    abstract static function eat();
}

?>