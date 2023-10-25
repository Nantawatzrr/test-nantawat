<?php

    $scoers = array("HomeWork" => 34,"Test" => 42,"Project"=>28);

    // echo $scoers['HomeWork'];
    $scoers['attendence']=10;
    ksort($scoers);
    foreach ($scoers as $key => $val){
        echo "$key : $val <br>";
    }
?>