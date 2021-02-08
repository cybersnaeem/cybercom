
<?php
    require('./connection/Contact.php');
    $dbobj = new Contact();

    

    if(isset($_REQUEST['updateContact'])){
       $dbobj->updateData($_POST);
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
    <form action="./update.php" method="post">
        <div class="container-fluid">
            <?php include('./navbar/nav.php'); ?>
            <div class="jumbotron pb-1 mb-3">
                <hr class="my-2">
                <p>Update Contacts</p>
            </div>
            <?php
            if(isset($_GET['id']) && !empty($_GET['id'])) {
                $data = $dbobj->editData($_GET['id']);
                $time = $data['datetime']; 
                //echo date('Y-m-d\TH:i:s', strtotime($time));
            ?>
            
            <div class="form-row">
            
                <div class="col-lg-2">

                </div>
                <div class="col-lg-4">
                <label for="">Name</label>
                <input type="hidden"  name="uid" value="<?php echo $_GET['id']; ?>" required >
                <input type="text" class="form-control" name="uname" placeholder="Contact Name" value="<?php echo $data['cname']; ?>" required />
                </div>
                <div class="col-lg-4">
                <label for="">Email</label>
                <input type="email" class="form-control" name="uemail" placeholder="Email" value="<?php echo $data['cemail']; ?>" required />
                </div>
                <div class="col-lg-2">

                </div>
            </div>
            <br>
            <div class="form-row">
            
                <div class="col-lg-2">

                </div>
                <div class="col-lg-4">
                <label for="">Phone</label>
                <input type="text" class="form-control" placeholder="Phone" maxlength="10" name="uphone" value="<?php echo $data['cphone']; ?>" required />
                </div>
                <div class="col-lg-4">
                <label for="">Title</label>
                <input type="text" class="form-control" placeholder="Title" name="utitle" value="<?php echo $data['ctitle']; ?>" required />
                </div>
                <div class="col-lg-2">

                </div>
            </div>
            <br>
            <div class="form-row">
            
                <div class="col-lg-2">

                </div>
                <div class="col-lg-4">
                <label for="">Created</label>
                <input type="datetime-local" class="form-control" name="udatetime" value="<?php  echo date('Y-m-d\TH:i:s', strtotime($time)) ?>">
                </div>
                <div class="col-lg-4">
                <label for=""></label>
                   
                </div>
                <div class="col-lg-2">

                </div>
            </div>
            <div class="form-row">
                <div class="col-lg-2">
                </div>
                <div class="col-lg-2">
                <label for=""></label>
                <button type="submit" name="updateContact" class="btn btn-warning btn-block">Update Contact</button>
                </div>
            </div>
            <?php
            }
            ?>
        </div>
    </form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>