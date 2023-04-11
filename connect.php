<?php
$dbname = "tae";

// Replace 'localhost', 'root' and '' with your MySQL server details
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Create database
$sql = "CREATE DATABASE $dbname";
if (mysqli_query($conn, $sql)) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}

mysqli_close($conn);
// Replace 'your_table_name' with your desired table name
$table_name = "project";

// Replace 'your_database_name' with your database name
$dbname = "tae";

// Replace 'localhost', 'root' and '' with your MySQL server details
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// SQL to create table
$sql = "CREATE TABLE $table_name (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
email VARCHAR(30) NOT NULL,
name VARCHAR(30) NOT NULL,
phone INT(30) NOT NULL,
email VARCHAR(50) NOT NULL
)";

if (mysqli_query($conn, $sql)) {
    echo "Table $table_name created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
