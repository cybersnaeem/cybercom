<?php
    require('./connection/Contact.php');
    $dbobj = new Contact();

    if (isset($_GET['page_no']) && $_GET['page_no']!="") {
        $page_no = $_GET['page_no'];
    } else {
         echo $page_no = 1;
    }
    
    $total_records_per_page = 5;

    $offset = ($page_no-1) * $total_records_per_page;
    $previous_page = $page_no - 1;
    $next_page = $page_no + 1;
    $adjacents = "2";


    $result_count = mysqli_query($dbobj->con,"select COUNT(*) as total_records from contacts");
    $total_records = mysqli_fetch_array($result_count);
    $total_records = $total_records['total_records'];
    $total_no_of_pages = ceil($total_records / $total_records_per_page);
    $second_last = $total_no_of_pages - 1;


    if(isset($_REQUEST['create'])){
        header('Location:create.php');
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
                    xmlhttp.open("GET","delete.php?id="+id,true);
                    xmlhttp.send();
                }
        }
</script>
  </head>
  <body>
    <form action="" method="post">
        <div class="container-fluid">
            <?php include('./navbar/nav.php'); ?>
            <div class="jumbotron pb-1 mb-3">
                <hr class="my-2">
                <p>Read Contacts</p>
                <p class="lead">
                        <button type="submit" name="create" class="btn btn-success">Create Contact</button>
                </p>
                <?php if(isset($_GET['insert_msg'])){  ?>
                <div class="alert alert-success" role="alert">
                  <p class="mb-0 text-center">
                    <?php echo $_GET['insert_msg']; ?>
                  </p>
                </div>
                <?php } ?>
                <?php if(isset($_GET['update_msg'])){  ?>
                <div class="alert alert-warning" role="alert">
                  <p class="mb-0 text-center">
                    <?php echo $_GET['update_msg']; ?>
                  </p>
                </div>
                <?php } ?>
            </div>
            <?php
                 $data = $dbobj->displayData();         
                 if(!empty($data)){
            ?>
            <table class="table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Title</th>
                        <th>Created</th>
                        <th colspan="2">Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                  //foreach($data as $records){
                    $result = mysqli_query($dbobj->con,"SELECT * from contacts limit $offset, $total_records_per_page");
                    while($row = mysqli_fetch_array($result)){
                        
                ?>
                    <tr id="txtData"> 
                        <td scope="row"><?php echo $row['id']; ?></td>
                        <td><?php echo $row['cname']; ?></td>
                        <td><?php echo $row['cemail']; ?></td>
                        <td><?php echo $row['cphone']; ?></td>
                        <td><?php echo $row['ctitle']; ?></td>
                        <td><?php echo $row['datetime']; ?></td>
                        <td>
                        <a href="./update.php?id=<?php echo $row['id']; ?>" name="update" class="btn btn-warning" >Update</a>
                        </td>
                        <td>
                        <button type="submit" name="delete" class="btn btn-danger" onclick="deleteUser(<?php echo $row['id']; ?>)">Delete</button>
                        </td>
                    </tr>
                    <?php
                  }  }  
                ?>
                </tbody>
            </table>  
            <div style='padding: 10px 20px 0px; border-top: dotted 1px #CCC;'>
                <strong>Page <?php echo $page_no." of ".$total_no_of_pages; ?></strong>
            </div>
            <ul class="pagination">
                <?php if($page_no > 1){
                echo "<li class=page-item><a class=page-link href='?page_no=1'>First Page</a></li>";
                } ?>
                    
                <li class="page-item" <?php if($page_no <= 1){ echo "class='disabled'"; } ?>>
                <a class="page-link" <?php if($page_no > 1){
                echo "href='?page_no=$previous_page'";
                } ?>>Previous</a>
                </li>
                    
                <li class="page-item" <?php if($page_no >= $total_no_of_pages){
                echo "class='disabled'";
                } ?>>
                <a class="page-link" <?php if($page_no < $total_no_of_pages) {
                echo "href='?page_no=$next_page'";
                } ?>>Next</a>
                </li>
                
                <?php if($page_no < $total_no_of_pages){
                echo "<li class=page-item><a class=page-link href='?page_no=$total_no_of_pages'>Last &rsaquo;&rsaquo;</a></li>";
                } ?>
                </ul>
        </div>
    </form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>