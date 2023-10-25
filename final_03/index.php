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
    <div class="container">
    <div class="col-md-12">
        <h1 class="mt-5" style="text-align: center;">Product Report</h1>
        <hr>
        <form action="output.php" method="post">
        <div class="text-center">
                Category 
                <select name="category" class="mx-5">
                <?php
                foreach (range('A', 'Z') as $alphabet) {
                ?>
                
                <option value="<?php echo $alphabet ?>">
                    <?php echo $alphabet ?>
                </option>
                
                
                <?php
                }
                ?>
                </select>
                
                Reorder Level
                <select name="reorder_level" class="ms-5">
                <?php
                foreach (['500','300','100','50'] as $oophabet) {
                ?>
                
                <option value="<?php echo $oophabet ?>">
                    <?php echo $oophabet ?>
                </option>
                
                
                <?php
                }
                ?>
                </select>
                <div class="mt-3">
                <button name="Search" type="submit" class="btn btn-primary">
							Search
			    </button>
                </div>
                
            </div>
            
        </form>
            
                
            </div>



        </div>
        
    </div>













































  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>