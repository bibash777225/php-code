<?php
require "registration.php"; // must create $pdo

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $email = $_POST['email'];
    $password = $_POST['password'];

    // 1. Prepare SQL with placeholders
    $sql = "SELECT * FROM users WHERE email = :email";
    $stmt = $pdo->prepare($sql);

    // 2. Execute safely
    $stmt->execute(['email' => $email]);

    // 3. Fetch user
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // 4. Verify password
    if ($user && password_verify($password, $user['password'])) {
        echo "Login success";
    } else {
        echo "Login failed";
    }
}
?>
