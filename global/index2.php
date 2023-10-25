<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Global Store dot com</h1>
    <p>
    <a href="index2.php">Home</a>
    <a href="index2.php?menu=promotion">Promotion</a>
    <a href="index2.php?menu=sale">Sale</a>
    <a href="index2.php?menu=coupou">Coupou</a>
    </p>
    <hr>
    <div style="height: 400px; background-color:antiquewhite">
    <?php
        $menu = isset($_GET['menu'])? $_GET['menu'] : "";
        switch($menu){
            case "promotion":{
                $page = "promotion.php";break;
            }
            case "sale":{
                $page = "sale.php";break;
            }
            case "coupou":{
                $page = "coupou.php";break;
            }
            default:{
                $page="main.php";
            }
        }
        include($page)
    ?>
    </div>
    <hr>
    <p>Copyright &copy; GlobalStore.com</p>
</body>
</html>