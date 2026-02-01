<!-- . Create an interface Shape with a method draw(). Create classes Circle and Square that implement
Shape and print "Drawing a Circle" and "Drawing a Square". Instantiate both and call draw() to show
polymorphism. --><?php
// Interface
interface Shape {
    public function draw();
}

// Circle class
class Circle implements Shape {
    public function draw() {
        echo "Drawing a Circle<br>";
    }
}

// Square class
class Square implements Shape {
    public function draw() {
        echo "Drawing a Square<br>";
    }
}

// Creating objects
$shape1 = new Circle();
$shape2 = new Square();

// Polymorphism 
$shape1->draw();
$shape2->draw();
?>
