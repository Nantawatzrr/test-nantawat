<?php
    $name = isset($_GET['name'])?$_GET['name'] : "";
    $tel = isset($_GET['tel'])?$_GET['tel'] : "";
    $address = isset($_GET['address'])?$_GET['address'] : "";
    // 
    $name = $_REQUEST['name'];
    $tel = $_REQUEST['tel'];
    $address = $_REQUEST['address'];

    echo "Name : $name <br>";
    echo "Tel : $tel <br>";
    echo "Address : $address <br>";
?>