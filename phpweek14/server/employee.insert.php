<?php
    include("../connect.inc.php");
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $salary = $_POST['salary'];

    $sql = "INSERT INTO employee (firstname,lastname,salary) VALUES ('$firstname','$lastname','$salary')";

    $qEmp = $conn->query($sql);

    $result = array();
    if ($qEmp){
        $insert_id = $conn->insert_id;
        $result['insert_id']=$insert_id;
        $result['msg']= "Insert Complete";
    }else{
        $result['msg']="Error during inserting";
    }
    echo json_encode($result);
?>