<!-- 8. Add a static property $vehicleCount to Car to track the number of objects created. Increment it in the
constructor and add a static method getVehicleCount() to display it. Test by creating multiple objects. -->
<?php
class Car {
    public static $vehicleCount = 0;

    public function __construct() {
        self::$vehicleCount++;
    }
     // Static method to get count
    public static function getVehicleCount() {
        return self::$vehicleCount;
    }
}

new Car();
new Car();
new Car();

// Display total vehicle count
echo "Total Vehicles Created: " . Car::getVehicleCount();
?>