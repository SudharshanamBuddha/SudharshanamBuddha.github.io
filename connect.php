<?php
$email=$_POST['email'];
$name=$_POST['name'];
$phone=$_POST['phone'];
$enquiry=$_POST['enquiry'];

$conn = new mysqli('localhost', 'root', '','tae');
if($conn->connect_error){
    die('Connection Failed: '.$conn->connect_error);
    echo "some error";
}
else{
    $stmt=$conn->prepare("insert into project(email,name,phone,enquiry)
        values(?, ?, ?, ?)");
    $stmt->bind_param("ssis",$email,$name,$phone,$enquiry);
    $stmt->execute();
    echo "successful";
    $stmt->close();
    $conn->close();
}

$sql = "CREATE DATABASE tae";
if (mysqli_query($conn, $sql)) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}
$table_name = "project";

// Replace 'your_database_name' with your database name
$dbname = "tae";
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
