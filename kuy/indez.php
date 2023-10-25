<!doctype html>
<html lang="en">

<head>
  <title>dasdasdnaskldna</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<link href="style.css" rel="stylesheet">
    
</head>

<body>


<?php
// $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
// echo "Peter is " . $age['Peter'] . " years old.<br>";
// echo "Peter is " . $age['Ben'] . " years old.<br>";
// echo "Peter is " . $age['Joe'] . " years old. <br>";
// ?>

 <?php
// $arr1 = array(
//     "one" => 1,
//     "two" => 2,
//     "three" => 3,
//     "seventeen" => 17
// );

// foreach ($arr1 as $key ) {
//    echo "$key  "."<br>";
// }

// echo output
// one => 1
// two => 2
// three => 3
// seventeen => 17
?>

<?php
    $students = array(
        array('id'=>'1001','name'=>'kyu','score'=>'72','grade'=>'pass'),
        array('id'=>'1002','name'=>'kyuuu','score'=>'71','grade'=>'pass'),
        array('id'=>'1003','name'=>'kyuuuu','score'=>'15','grade'=>'no'),
        array('id'=>'1004','name'=>'kyuuuuu','score'=>'25','grade'=>'no'),  
    );
?>



<table  style="text-align:center"> 

	<tr>
        <th>ID</th>
        <th>name</th>
        <th>score</th>
        <th>grade</th>
	</tr>

    <?php 
    foreach($students as $stdd  ){
    ?>  
    <tr>
    <td><?php echo $stdd["id"];?></td>
    <td><?php echo $stdd['name'];?></td>
    <td><?php echo $stdd['score'];?></td>
    <td><?php echo $stdd['grade'];?></td>
    </tr>
    <?php
        }
    ?>






</table>



















  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>