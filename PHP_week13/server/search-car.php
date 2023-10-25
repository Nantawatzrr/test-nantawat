<?php
    include("../connect.inc.php");
    $id = $_POST['id'];
    $sql = "select * from car where id =$id";
    $qCar = $conn->query($sql);

    $car = $qCar->fetch_object();

    echo json_encode($car);
?>