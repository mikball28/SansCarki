
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  
  <title>KepezKolik</title>
</head>

<body class="mt-5">


  <div class="container  mb-5">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-6 col-lg-5 col-md-6 items-align-center">

        <div class="card o-hidden border-5 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-11">
                <div class="p-5">
                  <div class="text-center">
                    <div class="imgs mb-4">
                    <i class="far fa-futbol" style="font-size:100px"></i>
                      
                    </div>
                    <p class="ml-1 mt-3 text-xl font-weight-bold text-danger ">
             Seçenek Ekleyiniz
            </p>
                    
                  </div>

                  <form class="user" action="spin.php" method="POST">

                    <div class="form-group">
                      <input type="text" name="option1" id="option1" class="form-control form-control-user mb-2"
                        placeholder="Seçenek 1">
                    </div>
                    <div class="form-group">
                      <input type="text" name="option2" id="option1"  class="form-control form-control-user mb-2"
                        placeholder="Seçenek 2">
                    </div>
                    <div class="form-group">
                      <input type="text" name="option3" id="option1"  class="form-control form-control-user mb-2"
                        placeholder="Seçenek 3">
                    </div>
                    <div class="form-group">
                      <input type="text" name="option4" id="option1"  class="form-control form-control-user mb-2"
                        placeholder="Seçenek 4">
                    </div>
                  

                    <a class="btn btn-danger btn-user btn-block " href="spin.php">
                      <i class="bi bi-box-arrow-in-right"></i>
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                          d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z" />
                        <path fill-rule="evenodd"
                          d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
                      </svg>
                      Ekle</a>


                    <hr class="mt-4">



                    <div class="row mt-">
                      <div class="col 4 text-center">
                      <span> &copy; MIKBALL</span>
                      </div>



                    </div>



                </div>

                </form>


              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>

  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>

