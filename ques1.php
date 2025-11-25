<?php




// rand(): Generating random numbers [21]
echo "<h3>Random Numbers:</h3>";
echo "Random number between 1 and 10: " . rand(1, 10) . "<br>"; // [21]
echo "Simulating a dice roll: " . rand(1, 6) . "<br>"; // [74]

// round(): Rounding numbers [75]
echo "<h3>Rounding Numbers:</h3>";
$pi = 3.14159;
echo "Original PI: " . $pi . "<br>";
echo "Rounded to nearest integer: " . round($pi) . "<br>"; // Outputs 3 [75]
echo "Rounded to 2 decimal places: " . round($pi, 2) . "<br>"; // Outputs 3.14 [76]

// number_format(): Formatting numbers for display [76]
echo "<h3>Formatting Numbers:</h3>";
$bigNumber = 1234567.8912;
echo "Original: " . $bigNumber . "<br>";
echo "Formatted with thousands separator: " . number_format($bigNumber) . "<br>"; 
// Outputs 1,234,568 [76]
echo "Formatted to 2 decimal places: " . number_format($bigNumber, 2) . "<br>"; 
// Outputs 1,234,567.89 [76]

// Arithmetic Operators: +, -, *, /, %, ++, -- [75]
echo "<h3>Arithmetic Operations (e-commerce example):</h3>";
$quantity = 3; // Buying 30 widgets [77]
$price = 119.95; // Price per widget [77]
$taxrate = .05; // 5% sales tax [?]

$subtotal = $quantity * $price; // Multiplication [77]
$totalWithTax = $subtotal + ($subtotal * $taxrate); // Addition and multiplication [77]

echo "<p>You are purchasing <strong>" . $quantity . "</strong> widget(s) at a cost of <strong>$" . 
$price . "</strong> each. ";
echo "With tax, the total comes to <strong>$" . number_format($totalWithTax, 2) . "</strong>.</p>"; 
// [78]

$count = 5;
echo "Initial count: " . $count . "<br>";
$count++; // Increment [75]
echo "After increment: " . $count . "<br>";
$count--; // Decrement [75]
echo "After decrement: " . $count . "<br>";



?>