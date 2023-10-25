<?php
    $students = array(
        array("id"=>"1001","Name"=>"Kittipan","Score"=>"70" ),
        array("id"=>"1002","Name"=>"Kirtsanachai","Score"=>"69" ),
        array("id"=>"1003","Name"=>"Nantawat","Score"=>"72" )
    );
    echo "<pre>";
    print_r($students);
    echo "</pre>";

    function grade($Score){
        if($Score>79){$grade = "4";}
        else if($Score>69){$grade = "3";}
        else if($Score>59){$grade = "2";}
        else if($Score>49){$grade = "1";}
        else{$grade = "0";}
    return $grade;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   
</head>
<body>
<nav class="navbar navbar-expand-md navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" href="#" aria-current="page">Home <span class="visually-hidden">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                    <div class="dropdown-menu" aria-labelledby="dropdownId">
                        <a class="dropdown-item" href="#">Action 1</a>
                        <a class="dropdown-item" href="#">Action 2</a>
                    </div>
                </li>
            </ul>
            <form class="d-flex my-2 my-lg-0">
                <input class="form-control me-sm-2" type="text" placeholder="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
     </div>
   </nav>
   
    <h1>Student report</h1>
    <hr>
    <table style="width:100%;" border="1">
    <tr>
        <th>id</th>
        <th>name</th>
        <th>scoer</th>
        <th>grade</th>
    </tr>
    <?php
    foreach($students as $k => $s){
    ?>
    <tr>
    <td><?php echo $s['id'];?></td>
    <td><?php echo $s['Name'];?></td>
    <td><?php echo $s['Score'];?></td>
    <td><?php echo grade($s['Score']) ?></td> 
    </t>
    <?php
    }
    ?>
    </table>

</body>
</html>
