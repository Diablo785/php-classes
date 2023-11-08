<?php

class Dog{
    public $name;
    private $age = 6;

    function __construct($name, $age){
        $this->name = $name;
        $this->age = $age;
    }

    public function birthday(){
        $this->age++;
        echo $this->age;
    }

    static function woof(){
        echo "woof!";
    }
    static function eat(){
        echo "I like bones!";
    }
}

?>