<?php
    session_start();
    include ('connect.php');

    $sql = "SELECT * FROM users";
    $qUser = $con->query($sql);

?>


<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  
    <center><h1> <?php echo "ยินดีต้อนรับ" ?> </h1></center>
    <table border="1" style="width:100%">
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Password</td>
            <td>Email</td>
            <td>img</td>
        </tr>
        <?php
        $num = $qUser->num_rows;
        if ($num > 0) {
            // (3) Fetch data
            $i=1;
            while ($row = $qUser->fetch_object()) {
        ?>
        <tr>
                    <td><?php echo $row->id; ?> [<?php echo $i; ?>]</td>
                    <td><?php echo $row->name; ?></td>
                    <td><?php echo $row->password;?></td>
                    <td><?php echo $row->email; ?></td>
                    <td><img src="IMG/"<?php echo $row->img ?>></td>
                </tr>
        <?php
            $i++;
            }
        }else
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