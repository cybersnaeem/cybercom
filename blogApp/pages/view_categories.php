<?php
    require('./../connection/conn.php');
    $conn = new Connection();

    require('./../Controllers/catagory.php');
    $cat = new Catagory();

    if(isset($_REQUEST['create'])){
        header('Location:add_categories.php');
    }
?>  

<!doctype html>
<html lang="en">
  <head>
    <title>View Catagories</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">  
    <script>
        function deleteUser(id) {
                if (id == "") {
                    document.getElementById("txtData").innerHTML = "";
                    return;
                } else {
                    var xmlhttp = new XMLHttpRequest();
                    xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("txtData").innerHTML = this.responseText;
                    }
                    };
                    xmlhttp.open("GET","./delete_categories.php?id="+id,true);
                    xmlhttp.send();
                }
        }
</script>
  </head>
  <body>
    <form action="" method="post">
        <div class="container-fluid">
             <?php include_once('./../navbar/nav.php'); ?>
            <div class="jumbotron pb-1 pt-2 mb-3">
            <a  href="" class="btn btn-success btn-sm">Manage Category</a>
            <a  href="#" class="btn btn-primary btn-sm">My Profile</a>
            <a  href="./logout.php" class="btn btn-danger btn-sm">Logout</a>
                <hr class="my-2">
                <p>Blog Category</p>
                <p class="lead">
                        <button type="submit" name="create" class="btn btn-success">Add Catagory</button>
                </p>
                <?php if(isset($_GET['insert_msg'])){  ?>
                <div class="alert alert-success" role="alert">
                  <p class="mb-0 text-center">
                    <?php echo $_GET['insert_msg'];
                      header('refresh:3; url=./view_catagories.php');
                    ?>
                  </p>
                </div>
                <?php } ?>
                <?php if(isset($_GET['update_msg'])){  ?>
                <div class="alert alert-warning" role="alert">
                  <p class="mb-0 text-center">
                    <?php echo $_GET['update_msg'];
                    header('refresh:3; url=./view_categories.php');
                    ?>
                  </p>
                </div>
                <?php } ?>
            </div>
            <?php
                 $data = $cat->displayCat();         
                 if(!empty($data)){
            ?>
            <table class="table">
                <thead>
                    <tr>
                        <th>Category Id</th>
                        <th>Image</th>
                        <th>Category Name</th>
                        <th>Created Date</th  >
                        <th colspan="2">Action</th>
                    </tr>
                </thead>  
                <tbody>
                <?php
                    foreach($data as $records){
                ?>
                    <tr id="txtData"> 
                        <td scope="row">
                        <?php echo $records['category_id']; ?>
                        </td>
                        <td>
                          <img style="height:70px; width:100px" src="./uploads/<?php echo $records['image']; ?>" alt="error">
                        </td>
                        <td><?php echo $cat->getCatagoryName($records['category_id']); ?></td>
                        <td><?php echo $records['created_At']; ?></td>
                        <td>
                        <a href="./update_categories.php?id=<?php echo $records['category_id']; ?>" name="update" class="btn btn-warning" >Update</a>
                        </td>
                        <td>
                        <button type="button" name="delete" class="btn btn-danger" onclick="deleteUser(<?php echo $records['category_id']; ?>)">Delete</button>
                        </td>
                    </tr>
                    <?php
                  }  }  
                ?>
                </tbody>
            </table>  
        </div>
    </form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>