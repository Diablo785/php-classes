<?php

class Cat{
    public $name;
    private $age = 0;

    public function birthday(){
        $this->age++;
        echo $this->age;
    }

    static function meow(){
        echo "meow!";
    }
}


?>