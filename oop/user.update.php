<?php
    include ('connect.inc.php');
    $id = $_POST['id'];
    $name = $_POST['user_name'];
    $tel = $_POST['user_tel'];
    $email = $_POST['user_email'];
    $address = $_POST['user_address'];

    $sql = "UPDATE users SET
        name = '$name',
        tel = '$tel',
        email = '$email',
        address = '$address'
        WHERE id = $id";

        $qUser = $conn->query($sql);

        if($qUser) {
            header('Location: userdata.php');
        }else{
            echo "Error while updating user data";
        }


?>