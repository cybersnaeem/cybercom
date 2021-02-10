<?php
    require('./../connection/conn.php');
    $conn = new Connection();

    require('./../Controllers/catagory.php');
    $cat = new Catagory();
    
    if(isset($_POST['addCat'])) {
        $cat->addCat($_POST,$_FILES['image']['name']); 
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Add Categories</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <form action="add_categories.php" method="post" enctype="multipart/form-data">
        <div class="container-fluid">
        <?php include_once('./../navbar/nav.php'); ?>
            <div class="jumbotron pb-1 mb-3">
                <hr class="my-2">
                <p>Add Categories</p>
            </div>
            <div class="form-row">
            
                <div class="col-lg-2">

                </div>
                <div class="col-lg-4">
                <label for="">Title</label>
                <input type="text" class="form-control" placeholder="Title" name="title"  />
                </div>
                <div class="col-lg-4">
                <label for="">Meta Title</label>
                <textarea  class="form-control" placeholder="Content" name="meta_title"  ></textarea>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
            <br>
            <div class="form-row">
            
                <div class="col-lg-2">

                </div>
                <div class="col-lg-4">
                <label for="">Image</label>
                <input type="file" class="form-control" name="image" />
                </div>
                <div class="col-lg-4">
                <label for="">URL</label>
                <input type="text" class="form-control" placeholder="URL" name="url"  />
                </div>
                <div class="col-lg-2">

                </div>
            </div>
            <br>
            <div class="form-row">
            
                <div class="col-lg-2">

                </div>
                <div class="col-lg-4">
                
                <label for="">Content</label>
                <textarea class="form-control"  name="content" ></textarea>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
            <br>
            <br>
            <div class="form-row">
                <div class="col-lg-2">
                </div>
                <div class="col-lg-2">
                <label for=""></label>
                <button type="submit" name="addCat" class="btn btn-success btn-block">Add Catagory</button>
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