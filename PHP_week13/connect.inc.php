<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "usedcar";

    $conn = new mysqli($host,$username,$password,$dbname);

    if(!$conn){
        die("Connection failed ". $conn->connect_error);
    }
?>