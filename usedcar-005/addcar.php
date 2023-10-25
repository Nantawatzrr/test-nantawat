<?php
    include ('connect.php');
    $brand = $_POST['brand'];
    $model = $_POST['model'];
    $color = $_POST['color'];
    $price = $_POST['price'];
    $year = $_POST['car_year'];
    $file = $_FILES['file'];

    if($file['error']===0){
        $rename = time();
        $typeItem = strtolower(pathinfo($file['name'],PATHINFO_EXTENSION));
        $fullname = "IMG/$rename.$typeItem";
        move_uploaded_file($file['tmp_name'],$fullname);
        $fullnamedb = "$rename.$typeItem";
        $sql = "INSERT INTO car (brand,model,color,car_year,price,picture) value ('$brand','$model','$color','$year','$price','$fullnamedb')";
        $qUser = $con->query($sql);
    }

    if ($qUser){
        header("localhost: index.php");
    }

?>