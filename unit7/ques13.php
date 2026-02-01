 <!--Create a User class representing a database entity with $id, $name, $email, $createdAt. Use
DateTime for $createdAt. Add methods getUserInfo() and daysSinceCreation(). Test with multiple objects.-->


<?php
class User {
    private $id;
    private $name;
    private $email;
    private $createdAt;

    // Constructor
    public function __construct($id, $name, $email) {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->createdAt = new DateTime(); // current date & time
    }

    // Return user information
    public function getUserInfo() {
        return "ID: $this->id, Name: $this->name, Email: $this->email";
    }

    // Calculate days since user was created
    public function daysSinceCreation() {
        $today = new DateTime();
        $diff = $today->diff($this->createdAt);
        return $diff->days;
    }
}

// Testing with multiple objects
$user1 = new User(1, "Bibash", "bibash@gmail.com");
$user2 = new User(2, "Ram", "ram@gmail.com");

echo $user1->getUserInfo() . "<br>";
echo "Days since created: " . $user1->daysSinceCreation() . "<br><br>";

echo $user2->getUserInfo() . "<br>";
echo "Days since created: " . $user2->daysSinceCreation();
?>
