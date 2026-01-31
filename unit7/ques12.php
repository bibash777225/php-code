
<!-- 12. Create a class Product with private properties $id, $name, $price, and $createdAt (using DateTime
defaulting to current time). Add a method to calculate how many days ago the product was created. Test it. -->

<?php
class Product {
    private $id;
    private $name;
    private $price;
    private $createdAt;

    // Constructor
    public function __construct($id, $name, $price) {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->createdAt = new DateTime(); // current date & time
    }

    // Method to calculate days since created
    public function daysSinceCreated() {
        $today = new DateTime();
        $difference = $today->diff($this->createdAt);
        return $difference->days;
    }
}

// Testing the class
$product = new Product(1, "Mobile Phone", 25000);

echo "Days since product created: " . $product->daysSinceCreated();
?>
