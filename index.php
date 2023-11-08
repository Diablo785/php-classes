<?php
require_once "Car.php";
require_once "Cat.php";
require_once "Dog.php";
require_once "Animal.php";

// $myCar = new Car("Dacia", 19000);
// $myCar->brand = "Dacia \n";

// echo $myCar->brand;
// $myCar->makeNoise();




// $Mincis = new Cat();
// $Mincis->name = "Mincis";
// $Mincis->birthday();

// $Brincis = new Cat();
// $Brincis->name = "Brincis";
// $Brincis->birthday();

// Cat::meow();



// new Dog("Reksis", 6);

//  Dog::woof();




    $cat = new Cat();
    Cat::eat();
    Dog::eat();

?>