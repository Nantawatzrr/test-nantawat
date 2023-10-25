<?php
    session_start();
    include("connect.inc.php");

    if($_SESSION['user']){
        header('location: user.login.php');
    }else{

    // 2 Query Data
    $sql = "SELECT * FROM users";
    // mysqli_query($conn,$sql); การเขียนแบบเก่า
    $qUser = $conn->query($sql);

    $sql_1 = "SELECT * FROM foods";
    $qFoods = $conn->query($sql_1);
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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>

</head>
<body>
<a href="newusers.php">Add user</a>
        <center><h1><?php echo "ยินดีต้อนรับ".$_SESSION['user']?></h1></center>
    <table border="1" style="width:100%">
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Tel</td>
            <td>Email</td>
            <td>Address</td>
            <td>Password</td>
            <td>Edit</td>
            <td>Delete</td>
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
                    <td><?php echo $row->tel; ?></td>
                    <td><?php echo $row->email; ?></td>
                    <td><?php echo $row->address; ?></td>
                    <td><?php echo $row->password;?></td>
                    <td>
                    <a href="user.edit.php?id=<?php echo $row->id;?>">
                    Edit
                        </a>
                    </td>
                    <td>
                        <a href="user.delete.php?id=<?php echo $row->id;?>"
                        onclick="return confirm('ยืนยันการลบช้อมูล')">
                        Delete
                        </a>
                    </td>
                </tr>
        <?php
            $i++;
            }
        } else{
        ?>
            <tr>
                <td colspan="3">--No User Data--</td>
            </tr>
        <?php
        }
        ?>
    </table>

    
<!--  -->
<!--  -->


<table border="1" style="width:100%">
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Price</td>
            <td>Price_extra</td>
        </tr>
        <?php
            while($row = $qFoods->fetch_object()){
        ?>

        <tr>
            <td><?php echo $row->id?>..</td>
            <td><?php echo $row->namefood; ?></td>
            <td><?php echo $row->price; ?></td>
            <td><?php echo $row->price_extra; ?></td>
        </tr>
        <?php
            }
        ?>
    </table>

</body>
</html>
<?php
    }
?>