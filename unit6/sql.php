<?php
require "registration.php"; // must create $pdo

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $username = $_POST['username'];
    $password = $_POST['password'];

    // 1. SQL template with placeholder
    $sql = "SELECT * FROM users WHERE name = ?";

    // 2. Prepare SQL
    $stmt = $pdo->prepare($sql);

    // 3. Execute with data
    $stmt->execute([$username]);

    // 4. Fetch user
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // 5. Verify password
    if ($user && password_verify($password, $user['password'])) {
        echo "login success";
    } else {
        echo "login failed";
    }
}
?>
