<?php
    // var_dump($_GET);
    // echo isset($_GET['name'])?"true" : "false";
    // $name = $_GET['name'];
    // $tel = $_GET['tel'];
    // echo "Name: $name<br>Tel: $tel";

   
    

    $name = isset($_GET['name'])?$_GET['name'] : "";
    $tel = isset($_GET['tel'])?$_GET['tel'] : "";
    $age = isset($_GET['age'])?$_GET['age'] : "-1";
    if($age>18){
        echo "ยินดีต้อนรับ<br>";
    }else echo "เด็กเกินไป<br>";
    echo "Name: $name<br>Tel: $tel";
?>