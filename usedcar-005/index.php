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
<section class="vh-100" style="background-color: #2779e2;">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
    <form  class="mx-1 mx-md-4" action="addcar.php" method="post" enctype="multipart/form-data">
      <div class="col-xl-9">

        <h1 class="text-white mb-4">Usedcar</h1>

        <div class="card" style="border-radius: 15px;">
          <div class="card-body">

            <div class="row align-items-center pt-4 pb-3">
              <div class="col-md-3 ps-5">

                <h6 class="mb-0">Brand</h6>

              </div>
              <div class="col-md-9 pe-5">

                <input type="text" name="brand" class="form-control form-control-lg" placeholder="brand" />

              </div>
            </div>

            <hr class="mx-n3">

            <div class="row align-items-center py-3">
              <div class="col-md-3 ps-5">

                <h6 class="mb-0">Model</h6>

              </div>
              <div class="col-md-9 pe-5">

                <input type="text" name="model" class="form-control form-control-lg" placeholder="model" />

              </div>
            </div>

            <hr class="mx-n3">

            <div class="row align-items-center py-3">
              <div class="col-md-3 ps-5">

                <h6 class="mb-0">Color</h6>

              </div>
              <div class="col-md-9 pe-5">

                <input type="text" name="color" class="form-control form-control-lg" placeholder="color">

              </div>
            </div>

            <hr class="mx-n3">

            <div class="row align-items-center py-3">
              <div class="col-md-3 ps-5">

                <h6 class="mb-0">Year</h6>

              </div>
              <div class="col-md-9 pe-5">
              <input type="text" name="car_year" class="form-control form-control-lg" placeholder="year">
            </div>

             <hr class="mx-n3 mt-5">

            <div class="row align-items-center py-3">
              <div class="col-md-3 ps-5">

                <h6 class="mb-0">Price</h6>

              </div>
              <div class="col-md-9 pe-5">

                <input type="text" name="price" class="form-control form-control-lg" placeholder="price">

              </div>
            </div>


            <hr class="mx-n3 mt-5">

            <div class="row align-items-center py-3">
              <div class="col-md-3 ps-5">

                <h6 class="mb-0">Color</h6>

              </div>

              
              <div class="col-md-9 pe-5">
                <input class="form-control form-control-lg" id="formFileLg" type="file" name="file" accept="image/*" />
                <label class="form-label" for="form3Example4cd">Picture</label>
            </div>



            <hr class="mx-n3 mt-5">

            <div class="px-5 py-4">
              <button class="btn btn-primary btn-lg">Addcar</button>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
  </form>
</section>

   




  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>