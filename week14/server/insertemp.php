<?php
    include("../connect.inc.php");
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $salary = $_POST['salary'];

    $sql = "INSERT INTO employee (firstname,lastname,salary) VALUE ('$firstname','$lastname','$salary')";
    $qEmp = $conn->query($sql);
    
    $result = array();
    if($qEmp){
        $insertID = $conn->insert_id; 
        $result['msg']="Insert Complete";
        $result['insert_id'] = $insertID;
    }else {
        $result['msg']="Error during insertion";
    }

    echo json_encode($result);
?>