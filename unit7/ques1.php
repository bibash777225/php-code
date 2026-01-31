<!-- Create a class named User with public properties $name and $email.
Instantiate the class, assign values, and echo them. -->

<?php
class User {
    public $name;
    public $email;
}

$user = new User();      // create object
$user->name = "John";    // assign value
$user->email = "john@example.com";

echo $user->name . "<br>";
echo $user->email;
?>