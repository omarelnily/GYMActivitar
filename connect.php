<?php
$full_name = $_POST['full_name'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];


// Database connection
$conn = new mysqli('localhost', 'root', '', 'newmember');
if ($conn->connect_error) {
    echo "$conn->connect_error";
    die("Connection Failed : " . $conn->connect_error);
} else {
    $stmt = $conn->prepare("insert into member(full_name,email, password,confirm_password) values(?,?,?,?)");
    $stmt->bind_param("ssss",$full_name,$email, $password,$confirm_password);
    // $execval =
    $stmt->execute();
    // echo $execval;
    echo "Registration successfully...";
    $stmt->close();
    $conn->close();
}
