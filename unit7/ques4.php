<!-- Add a method getCarInfo() to the Car class that returns a string with the car’s
make and model. Call the method and print the output. -->
<?php
class Car {
    public $make;
    public $model;

    public function getCarInfo() {
        return "Car: $this->make $this->model";
    }
}

$car = new Car();
$car->make = "Honda";
$car->model = "Civic";

echo $car->getCarInfo();
?>