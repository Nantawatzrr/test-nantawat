<?php

    $names = array("Surachat","Nantawat","Chayyutpong","Pongsit","Rungnapa");
    $c = count($names);

    echo "$c <br>";

    // for($i = 0;$i<$c;$i++){
    //     echo "$names[$i]<br>";
    // }

    $names[] = "Narongsak";
    $names[] = "Ittisak";

    foreach($names as $n){
        echo "$n<br>";
    }

    sort($names); //sort ascending
    rsort($names); //sort descending
    echo "________________________________<br>";
    foreach($names as $n){
        echo "$n<br>";
    }


    $n = rand(1,100);
    echo "$n<br>";
?>