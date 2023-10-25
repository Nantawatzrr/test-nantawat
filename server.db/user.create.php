<?php
    include ("server.php");
    $name = $_POST['user_name'];
    $tel    = $_POST['user_tel'];
    $email = $_POST['user_email'];
    $password = $_POST['user_password'];
    $address = $_POST['user_address'];
    $pass = md5($password);
    $sql = "INSERT INTO users (name, tel, email, password, address) VALUES ('$name', '$tel', '$email','$pass','$address')";
    $qUser = $conn->query($sql);
    if($qUser){
        header('Location: userdata.php');
    }else{
        echo "Error while inserting user data";
    }
?>