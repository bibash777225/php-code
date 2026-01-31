<!-- . Add magic methods __construct() and __destruct() to the Car class to print messages when objects are
created or destroyed. Add __toString() to return car details. Test by echoing the object. -->
<?php

class Car {
    private $make;
    private $model;

    // Constructor
    public function __construct($make, $model) {
        $this->make = $make;
        $this->model = $model;
        echo "Car object created<br>";
    }

    // __toString magic method
    public function __toString() {
        return "Car Make: $this->make, Model: $this->model<br>";
    }

    // Destructor
    public function __destruct() {
        echo "Car object destroyed<br>";
    }
}

// Create object
$car1 = new Car("Toyota", "Corolla");

// Echo object (calls __toString)
echo $car1;
?>

