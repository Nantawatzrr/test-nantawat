<?php
    $localhost = "localhost";
    $username = "root";
    $password = "";
    $dbname = "cakeks";

    $conn = new mysqli($localhost,$username,$password,$dbname);

    if(!$conn){
        die ("connection failed ". $conn->connect_error);
    }
?>