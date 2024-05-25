<?php include('server.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>quiz</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="css/bootstrap.min.css" rel="stylesheet"/>
    <script src="js/bootstrap.bundle.js"></script>
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    rel="stylesheet"
    />
    <!-- Google Fonts -->
    <link
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
    rel="stylesheet"
    />
    <!-- MDB -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.css"
    rel="stylesheet"
    />
    
    <script
      type="text/javascript"
      src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.js"
    ></script>




 


</head>
<body>


    <section class="vh-100" style="background-color: #508bfc;">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
              <div class="card shadow-2-strong" style="border-radius: 1rem;">
                <div class="card-body p-5 text-center">
      
                  <h3 class="mb-5">Login</h3>

                  <form method="post" action="login.php">
                  <?php include('errors.php'); ?>


      
                  <div   class="form-outline mb-4">

                    <input type="email" id="typeEmailX-2" class="form-control form-control-lg" />
                    <label class="form-label" for="typeEmailX-2">Email</label>
                  </div>
      
                  <div class="form-outline mb-4">
                    <input type="password" id="typePasswordX-2" class="form-control form-control-lg" />
                    <label class="form-label" for="typePasswordX-2">Password</label>
                  </div>
      
                  <a href="#"> forget password?</a>
      
                  <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>

                  <p>Dont  have an account ?<a href="sigin.php">Signup</a></p>

      
                  <hr class="my-4"   >
      
                  <button class="btn btn-lg btn-block btn-primary" style="background-color: blue;"
                    type="submit"><i class="fab fa-facebook-f me-2"></i> login in with facebook </button>
                  <button class="btn btn-lg btn-block btn-primary mb-2" style="background-color: white; color: gray;"
                    type="submit"><i  style="color: red;" class="fab fa-google me-2 "></i>log in with google</button>
      
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    
</body>

</html>