<?php
    include ("../connect.inc.php");
    $id = $_POST['id'];
    $name = $_POST['name'];
    $size = $_POST['size'];
    $price = $_POST['price'];


    $sql = "INSERT INTO product (id,name,size,price) VALUES ('$id','$name','$size','$price')";

    $qCk = $conn->query($sql);

    $result = array();
    if ($qCk){
        $insert_id = $conn->insert_id;
        $result['insert_id']=$insert_id;
        $result['msg_insert']="Insert Complete";
    }else{
        $result['msg_insert']="Error during inserting";
    }
    echo json_encode($result);
?>
