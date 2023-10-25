<?php

// use LDAP\Result;
    include("../connect.inc.php");
    $id = $_POST['id'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $salary = $_POST['salary'];

    $sql = "update employee set firstname = '$firstname' , lastname = '$lastname' , salary = '$salary' WHERE id = $id;";
    $qEmp = $conn->query($sql);

    $result = array();
    if($qEmp){
        $result['msg_edit'] = "Edit Complete";
    }
    else{
        $result['msg_edit'] = "Edit false";
    }
    echo json_encode($result);


?>