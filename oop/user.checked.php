<?php
    include ("connect.inc.php");


    $uname = $_POST['username'];
    $pword = $_POST['password'];
    $newpass = md5($pword);

    $sql = "SELECT * FROM users WHERE name = '$uname' AND password = '$newpass'";
    $qUser = $conn->query($sql);

    if($qUser){
        $result = $qUser->fetch_object();
        $_SESSION['user']= $result->name;
        header('location: userdata.php');
    }else{
        header('location: user.login.php');
    }

?>