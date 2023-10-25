<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <p id="data1">
        My Data
    </p>
    <p class="error">
        404 Not Found
    </p>
    <p class="error">
        500 Internal Server Error
    </p>
    <button class="btn-color" data-color="red">Red</button>
    <button class="btn-color" data-color="green">Green</button>
    <button class="btn-color" data-color="blue">Blue</button>
    <button class="btn-color" data-color="purple">Purple</button>
    <button class="btn-color" data-color="orange">Orange</button>
    <button class="btn-color" data-color="yellow">Yellow</button>
    <button class="btn-color" data-color="brown">Brown</button>

<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>

<script>
    $(document).ready(function(){
        $("#data1").html("My name is .........");
        let data = $("#data1").html();
        //alert(data1);

        $(".btn-color").click(function(){
            let color = $(this).data("color");
            $(".error").css("color", color);
        });
    });
</script>


</body>
</html>