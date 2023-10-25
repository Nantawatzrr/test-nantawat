<?php

$score = array();

for ($i=0;$i<50;$i++){
    $n = rand(1,1000000);
    $score[] = $n;
}
rsort($score); 
foreach($score as $i =>$s){
    echo "$i : $s <br>";
}
// var_dump($score)
echo "<pre>";
print_r($score);
echo "</pre>";
?>