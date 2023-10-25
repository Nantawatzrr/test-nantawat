<?php
    include ("../connect.inc.php");
    $id = $_POST['id'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $salary = $_POST['salary'];

    $sql = "UPDATE employee SET firstname = '$firstname',lastname = '$lastname',salary = '$salary' WHERE id = '$id';";
    $qEmp = $conn->query($sql);

    $result = array();
    if ($qEmp){
        $result['msg_edit']= "Update Complete";
    }else{
        $result['msg_edit']="Error during inserting";
    }
    echo json_encode($result);
?>