<?php
    // 1 create connect
    include("connect.inc.php");
    // query
    $name = $_POST['user_name'];
    $tel = $_POST['user_tel'];
    $email = $_POST['user_email'];
    $address = $_POST['user_address'];
    $password = $_POST['user_password'];
    $pass = md5($password);
    $sql = "INSERT INTO users (name,tel,email,address,password) VALUES ('$name','$tel','$email','$address','$pass');";

    $qUser = $conn->query($sql);
    if($qUser) {
        header('Location: userdata.php');
    }else{
        echo "Error while inserting user data";
    }


?>