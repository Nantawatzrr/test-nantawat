<?php
// loop while

//     while($i<=100){
//         if($i%2==0){
//             echo "$i<br>";
//         }
//         $i++;
//     }

// do{
//     if($i%3==0){
//       echo "$i<br>";
//     }
//     $i++;
// }while($i<=100);

// do while

// do{
//     if($i%7==0){
//         echo "$i?&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
//     }else{
//         echo "$i&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
//     }
//     if($i%5==0){
//         echo "<br>";
//     }
//     $i++;
// }while($i<=50);


// for loop


// for($i=1;$i<=50;$i++){
//     echo "$i <br>";

// }

// for($i=50;$i>=1;$i-=2){
//     echo "$i <br>";
// }


$money = 12000;
$interset_rate = 0.015;
$goal = 600000;


// for($y=1;$y<=10;$y++){
//     $money = $money + ($money * $interset_rate);
//     echo "ปีที่ $y: $money<br>";
// }

// for($y=1;$y<=100;$y++){
//     $money = $money * (1 + $interset_rate);
//     $money += $money_1;
//     if($money>$goal){
//         break;
//     }   
// }
// echo "ปีที่ $y จะมีเงินเก็บ $money";

for($m=1;$m<=200;$m++){
    $interset = ($goal * $interset_rate);
    $capital = $money - $interset; 
    $goal -= $capital;
    $s = $money - $interset;
    $sum += $interset;
    

    $str_capital = number_format($capital,2);
    $str_interest = number_format($interset,2);
    $str_balance = number_format($goal,2);
    $str_sum = number_format($sum);
    echo "งวดที่ $m : เงินต้น : $str_capital ดอกเบี้ย : $str_interest คงเหลือ : $str_balance <br>";
    if($goal<0){
        break;
    }
}echo "จำนวนงวดที่ต้องผ่อน : $m : $str_sum"
?>  