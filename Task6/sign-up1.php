<?php 
    session_start();
?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.rtl.min.css" integrity="sha384-T5m5WERuXcjgzF8DAb7tRkByEZQGcpraRTinjpywg37AO96WoYN9+hrhDVoM6CaT" crossorigin="anonymous">

    <title>Hello world!</title>
  </head>
  <body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Registration Form Signup Form in PHP Mysqli</h4>
                    </div>
                    <div class="card-body">
                        <?php 

                            if(isset($_SESSION['status']) && $_SESSION['status'] !='')
                            {
                                ?>
                                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                        <strong>Hey!</strong> <?php echo $_SESSION['status']; ?>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>


                                <?php
                                unset($_SESSION['status']);
                            }

                        ?>
                        
                        <form action="sign-up-code1.php" method="post">
                            <div class="form-group">
                                <input type="text" name="username" class="form-control" placeholder="Enter Username"><br>
                            </div>
                            <div class="form-group">
                                <input type="text" name="email" class="form-control" placeholder="Enter Email"><br>
                            </div>
                            <div class="form-group">
                                <input type="text" name="password" class="form-control" placeholder="Enter Password"><br>
                            </div>
                            <div class="form-group">
                                <input type="text" name="confirm_password" class="form-control" placeholder="Enter Confirm Password"><br>
                            </div>
                            <div class="form-group">
                            <select class="" name="country" required>
                                <option value="" selected hidden>Select country</option>
                                <option value="India">India</option>
                                <option value="Australia">Australia</option>
                                <option value="Japan">Japan</option>
                                <option value="America">America</option>
                                <option value="Africa">Africa</option>
                            </select><br><br>
                            <button type="submit" name="signup_btn" class="btn btn-primary">SignUp/Register</button>
                            <button onclick="window.location.href = 'loginform.html';" class="btn btn-primary">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
    -->
  </body>
</html>