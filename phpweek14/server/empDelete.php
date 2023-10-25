<?php
    include("../connect.inc.php");
    $id = $_GET['id'];

    $sql = "DELETE FROM employee WHERE id = '$id'";

    $qEmp = $conn->query($sql);

    $result = array();
    if($qEmp){
        $result['msg_detele']="Delete complete";
    }else{
        $result['msg_detele']="Error detele";
    }

?>