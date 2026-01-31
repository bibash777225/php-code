<!-- Create a class called Car with public properties $make and $model.
Instantiate the class, assign values, and echo them. -->
<?php
class Car {
    public $make;
    public $model;
}

$car = new Car();
$car->make = "Toyota";
$car->model = "Corolla";

echo $car->make . "<br>";
echo $car->model;
?>