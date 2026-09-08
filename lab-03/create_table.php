<?php

$conn = new mysqli("localhost", "root", "", "wis_lab");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to create the students table
$sql = "CREATE TABLE IF NOT EXISTS students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(100) NOT NULL,
    email VARCHAR(120) NOT NULL,
    department VARCHAR(80) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

// Execute it with $conn->query($sql) and show success/error message
if ($conn->query($sql) === TRUE) {
    echo "Table 'students' created successfully!";
} else {
    echo "Error creating table: " . $conn->error;
}


$conn->close();
?>
