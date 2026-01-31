
<!-- Add a constructor to the User class that accepts $name and $email and sets
the properties automatically. Instantiate an object and display the values -->

<?php
class User {
    public $name;
    public $email;

    public function __construct($name, $email) {
        $this->name = $name;
        $this->email = $email;
    }
}

$user = new User("Alice", "alice@example.com");

echo $user->name . "<br>";
echo $user->email;
?>