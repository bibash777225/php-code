<!-- . Create a class ElectricCar that extends the Car class. Add a property $batteryCapacity and a method
showElectricCar() to display all details. Test with an object. -->
<?php


// Parent class
class Car {
    protected $make;
    protected $model;

    // Constructor of Car
    public function __construct($make, $model) {
        $this->make = $make;
        $this->model = $model;
    }

    // Method to display car info
    public function displayCarInfo() {
        echo "Car Make: " . $this->make . "<br>";
        echo "Car Model: " . $this->model . "<br>";
    }
}

// Child class
class ElectricCar extends Car {
    private $batteryCapacity;

    // Constructor of ElectricCar
    public function __construct($make, $model, $batteryCapacity) {
        parent::__construct($make, $model); // call parent constructor
        $this->batteryCapacity = $batteryCapacity;
    }

    // Method to display electric car info
    public function showElectricCar() {
        $this->displayCarInfo();
        echo "Battery Capacity: " . $this->batteryCapacity . " kWh";
    }
}

// Create object of ElectricCar
$electricCar = new ElectricCar("Tesla", "Model S", 100);

// Call method
$electricCar->showElectricCar();

?>

