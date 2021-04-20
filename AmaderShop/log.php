<?php 
error_reporting(0);
    $email = $_POST['email'];
    $password = $_POST['password'];


$con = new mysqli("localhost","root","","amader_shop");

if($con->connect_error){
    die("not cconnect: ".$con->connect_error);
} else { 
    $stmt = $con->prepare("select * from log_reg where email = ?");
    $stmt->bind_param ("s",$email);
    $stmt->execute();
    $stmt_result = $stmt->get_result();
    if($stmt_result->num_rows > 0) { 
        $data = $stmt_result->fetch_assoc();
        if($data['password'] === $password){
            header ("location:index.html");
            //echo "login success";
        }else{
            
            echo "invalid user , make an account to log in ";
       } 
    }        
    }