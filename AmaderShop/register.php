<?php
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$cell = $_POST['cell'];

$conn = new mysqli("localhost","root","","amader_shop");
if($conn->connect_error){
    die("not cconnect: ".$conn->connect_error);
} else { 
    $stmt = $conn->prepare("insert into log_reg(first_name, last_name, email, username, password, cell)
    values(?,?,?,?,?,?)");
    $stmt->bind_param("sssssi",$first_name, $last_name, $email, $username, $password, $cell);
    $stmt->execute();
    $stmt_result = $stmt->get_result();
    header ("location:log.html");
    //echo "registration success";
    $stmt->close();
    $conn->close();
}
