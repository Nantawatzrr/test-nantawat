<?php
    include ('connect.inc.php');
    $id = $_GET['id'];
    $sql = "SELECT * FROM users WHERE id = $id";
    $qUser = $conn->query($sql);
    $user = $qUser->fetch_object();
?>

<!doctype html>
<html lang="en">

<head>
  <title></title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>

</head>

<body>
<h1>Edit User</h1>
    <hr>
    <form action="user.update.php" method="post">
        <input type="hidden" name="id" value="<?php echo $user->id;?>">
        <p>
            <label for="">Name: </label>
            <input type="text" name="user_name" value="<?php echo $user->name; ?>">
        </p>
        <p>
            <label for="">Tel: </label>
            <input type="text" name="user_tel" value="<?php echo $user->tel; ?>">
        </p>
        <p>
            <label for="">Email: </label>
            <input type="email" name="user_email" value="<?php echo $user->email; ?>">
        </p>
        <p>
            <label for="">Address: </label>
            <input type="text" name="user_address" value="<?php echo $user->address; ?>">
        </p>
        <p>
            <button>Submit</button>
        </p>        
    </form>
</body>

</html>