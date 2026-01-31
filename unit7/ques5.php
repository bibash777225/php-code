<!-- Add a constructor to your Car class to set $make and $model automatically
when creating an object -->
<?php
class Car {
    public $make;
    public $model;

    public function __construct($make, $model) {
        $this->make = $make;
        $this->model = $model;
    }

    public function getCarInfo() {
        return "Car: $this->make $this->model";
    }
}

$car = new Car("BMW", "X5");
echo $car->getCarInfo();
?>
