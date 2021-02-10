<?php
  require('./connection/conn.php');
  $conn = new Connection();

  require('./Controllers/users.php');
  $auth = new Users(); 

  if(isset($_REQUEST['login'])){
    $auth->login($_POST);
  }
?>
<!doctype html>
<html lang="en">
  <head>
    <title>login here..</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> 
  </head>
  <body>
  <form action="./index.php" method="post">
    <div class="container">
    <?php
      if(isset($_GET['err'])){

    ?>
      <div class="alert alert-danger mt-5" role="alert">
        <strong>
        <?php 
            echo $_GET['err']; 
            header('refresh:3;url=index.php');
        ?></strong>
      </div>
      <?php
          }
      ?>
        <div class="row pt-5">
            <div class="col-md-3 col-lg-3">
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="card text-left">
                  <div class="card-body">
                    <h4 class="card-title text-center">Login</h4>
                    <p class="card-text">
                        <div class="form-group">
                          <label for="email">Email</label>
                          <input type="email"
                            class="form-control" name="email" id="email" aria-describedby="helpId" placeholder="Email"/>
                          <small id="helpId" class="form-text text-muted">Enter Email</small>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password"
                              class="form-control" name="password" id="password" aria-describedby="helpId" placeholder="Password" 
                            />
                            <small id="helpId" class="form-text text-muted">Enter Password</small>
                          </div>
                          
                        <div class="form-group pb-4">
                            <button type="submit" name="login" class="btn btn-primary  btn-block">Login</button>
                        </div>
                        <hr>
                        <p class="text-center">OR</p>
                        <hr>
                        <div class="form-group pb-2">
                                <a href="./register.php" class="btn btn-warning  btn-block" id="btnReg">Register Now</a> 
                        </div>
                    </p>
                  </div>
                </div>
            </div>
            <div class="col-md-3 col-lg-3">

            </div>
        </div>
    </div>
    </form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>