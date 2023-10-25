<?php 
    include ('connect.php');
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $file = $_FILES['file'];


    if ($file['error']===0){
        $rename = time();
        $typeItem = strtolower(pathinfo($file['name'],PATHINFO_EXTENSION));
        $fullName = "IMG/$rename.$typeItem";
        move_uploaded_file($file['tmp_name'],$fullName);
        $fullNamedb = "$rename.$typeItem";
        $sql = "INSERT into users (name,email,password,img) value('$name','$email','$password','$fullNamedb')";
        $qUser = $con->query($sql);
    }
    if ($qUser){
        header("localhost: index.php");
    }
?>