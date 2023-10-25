<?php 
    include('server.php');
    session_start();
    $username = $_POST['username'];
    $password = $_POST['password'];
    $newpass = md5($password);
    $sql = "SELECT * FROM users WHERE name = '$username' AND password = '$newpass'";
    $quser = $conn->query($sql);
    if($result = $quser->fetch_object()){
        $_SESSION['user'] = $result->name ;
        header('location: userdata.php');
    }else{
        echo "<script>alert('Username หรือ Password ไม่ถูกต้องถูก กรุณากรอกใหม่อีกครั้ง'); window.location = 'login.php'</script>";
    }
?>