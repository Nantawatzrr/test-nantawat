<?php
    include("server.php");
    //(2) Query Data
    $sql = "SELECT * FROM users";
    // mysqli_query($conn, $sql)
    $qUser = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="newuser.php">add_user</a>
    <?php
        $num = $qUser->num_rows;
    ?>
    <table border="1" style="width:100%">
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Tel</td>
            <td>email</td>
            <td>address</td>
            <td>edit</td>
            <td>delete</td>
        </tr>
        <?php
        if($num > 0){
            $i = 1;
            while($row = $qUser->fetch_object()){
        ?>
            <tr>
                <td><?php echo $row->id; ?>[<?php echo $i; ?>]</td>
                <td><?php echo $row->name; ?></td>
                <td><?php echo $row->tel; ?></td>
                <td><?php echo $row->email; ?></td>
                <td><?php echo $row->address; ?></td>
                <td><a href="user.edit.php?id=<?php echo $row->id ?>" 
                onclick="return confirm('ยืนยันการแก้ไขข้อมูล')"><button>edit</button></a></td>
                <td><a href="user.delete.php?id=<?php echo $row->id ?>" 
                onclick="return confirm('ยืนยันการลบข้อมูล')"><button>delete</button></a></td>
            </tr>
        <?php
        $i++;
            }
        }else{ ?>
            <tr><?php echo "No userdata"; ?></tr>
    <?php    }
        ?>
    </table>
</body>
</html>