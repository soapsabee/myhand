<!doctype html>

<?php
    include("../model/connectdb.php");
    $sql = 'SELECT Product_ID,Product_Name,Product_Locate,Product_Price,IMG_HEAD FROM product WHERE Product_Type = "'.$_GET['type'].'" ';
    $query = mysqli_query($connect,$sql);
?>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>
  <body>
      

       <nav class="navbar navbar-expand-sm bg-light justify-content-center" role="navigation">

<a class="navbar-brand" href="#">
  <h3>2hand</h3>
</a>
<!-- Links -->
<ul class="nav navbar-nav ">
  <li class="nav-item">
    <a class="nav-link" href="#" data-toggle="modal" data-target="#myModal">เข้าสู่ระบบ</a>
  </li>
  <li class="nav-item">
    <h4>หรือ</h4>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">สมัครสมาชิก</a>
  </li>
</ul>
</nav>

    <div class="container">
        
        <div class="row">
        
 <?php while($result = mysqli_fetch_array($query,MYSQLI_ASSOC)){ ?>
    <div class="card" style="width:300px">
  <img class="card-img-top" style="width:auto; height:200px;" src="photo/<?php echo $result['IMG_HEAD']; ?>" alt="Card image">
  <div class="card-body">
    <h4 class="card-title"><?php echo $result['Product_Name']; ?></h4>
    <p class="card-text"><?php echo $result['Product_Locate']; ?></p>
    <p class="card-text"><?php echo $result['Product_Price']; ?></p>
    <a href="page_product.php?productid=<?php echo $result['Product_ID']?>" class="btn btn-primary">See Profile</a>
 
 </div>

</div>
<?php } ?>


        </div>


    </div>







    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>