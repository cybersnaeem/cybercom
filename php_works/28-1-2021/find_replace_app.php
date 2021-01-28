<?php
    $offset = 0;
    if(isset($_REQUEST['getText'])){
        $text = $_POST['textData'];
        $find = $_POST['findText'];
        $replace = $_POST['repText'];

        $find_text_length = strlen($find);
        if(!empty($text) && !empty($find) && !empty($replace)){
            
            while($position = strpos($text,$find,$offset)){
                $offset = $position + $find_text_length;
                $text = substr_replace($text,$replace,$position,$find_text_length);
            }
            $msg = $text;
        }   
        else{
            $msg = 'Please Fillout Fields';
        }
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <form action="find_replace_app.php" method="post">
      
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-lg-3">
                
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="card">
                    <div class="card-header">
                        Find And Replace Application
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                          <label for=""></label>
                          <textarea class="form-control" name="textData" placeholder="Enter Text Here.."></textarea>
                          <small id="helpId" class="form-text text-muted">Enter Your Text</small>
                        </div>
                        <div class="form-group">
                          <label for="">Find</label>
                          <input type="text"
                            class="form-control" name="findText" placeholder="Find Text">
                          <small id="helpId" class="form-text text-muted">Find Text</small>
                        </div>
                        <div class="form-group">
                          <label for="">Replace Text</label>
                          <input type="text"
                            class="form-control" name="repText" placeholder="Replace Text">
                          <small id="helpId" class="form-text text-muted">Replace Text</small>
                        </div>
                    </div>
                    <div class="form-group text-center">
                        <button type="submit" name="getText" class="btn btn-primary">Change!</button>
                    </div>
                    
                    <div class="card-footer text-muted">
                    Result:
                        <?php 
                           if(isset($_POST['getText'])){
                                echo $msg;
                           }
                        ?>
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