<!-- Change the visibility of your User or Car properties to private. Create a public method displayUserInfo()
or displayCarInfo() that returns a string with object details. Test it -->
<?php

class Car {
    private $make;
    private $model;

    public function __construct($make, $model) {
        $this->make = $make;
        $this->model = $model;
    }

    public function displayCarInfo() {
        echo "Car: $this->make $this->model";
    }
}

$car = new Car("Audi", "A6");
$car->displayCarInfo();

?>