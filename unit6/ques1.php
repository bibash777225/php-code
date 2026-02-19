<!--   Create a MySQL database named `student_portal`. Inside it, create a table `students` with the following columns: `id` (INT, Primary Key, Auto Increment), `name`
(VARCHAR), `email` (VARCHAR), and `course` (VARCHAR).->
<?php

CREATE DATABASE IF NOT EXISTS student_portal;


USE student_portal;

// -- Create students table
CREATE TABLE IF NOT EXISTS students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    email VARCHAR(100),
    course VARCHAR(100)
);
?>
