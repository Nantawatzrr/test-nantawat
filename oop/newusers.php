<!doctype html>
<html lang="en">

<head>
  <title>new user from</title>
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
<h1>New User</h1>
    <hr>
    <form action="user.create.php" method="post">
        <p>
            <label for="">Name: </label>
            <input type="text" name="user_name">
        </p>
        <p>
            <label for="">Tel: </label>
            <input type="text" name="user_tel">
        </p>
        <p>
            <label for="">Email: </label>
            <input type="email" name="user_email">
        </p>
        <p>
            <label for="">Address: </label>
            <input type="text" name="user_address">
        </p>
        <p>
            <label for="">Password: </label>
            <input type="password" name="user_password">
        </p>
        <p>
            <button>Submit</button>
        </p>        
    </form>
</body>

</html>