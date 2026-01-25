<?php
$host = "localhost";
$dbname = "test";
$username = "root";      // default for XAMPP
$password = "";          // default for XAMPP

try {
    // 1. Connect to database
    $pdo = new PDO(
        "mysql:host=$host;dbname=$dbname;charset=utf8",
        $username,
        $password
    );

    // Enable error mode
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // 2. SQL to create table
    $sql = "
       CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)
    ";

    // 3. Execute query
    $pdo->exec($sql);

    echo "Table 'users' created successfully";

} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}


?>
<DOCTYPE html>
<body>
<form action="register.php" method="POST">
    <h2>Register</h2>

    <input type="text" name="name" placeholder="Enter name" required>

    <input type="email" name="email" placeholder="Enter email" required>

    <input type="password" name="password" placeholder="Enter password" required>

    <button type="submit">Register</button>
</form>

</body>
</html>