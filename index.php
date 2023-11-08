<?php
require_once "Car.php";
require_once "Cat.php";

// $myCar = new Car("Dacia", 19000);
// $myCar->brand = "Dacia \n";

// echo $myCar->brand;

// $myCar->makeNoise();



$Mincis = new Cat();
$Mincis->name = "Mincis";
$Mincis->birthday();

$Brincis = new Cat();
$Brincis->name = "Brincis";
$Brincis->birthday();


Cat::meow();
?>