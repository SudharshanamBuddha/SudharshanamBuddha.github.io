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
?>
