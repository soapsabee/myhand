<!doctype html>
<?php 

session_start(); 

if($_SESSION['username']==NULL ){
    header("location:../index.php");
}


?>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
    crossorigin="anonymous">
  <link rel="stylesheet" href="css/index.css">
</head>

<body>

<nav class="navbar navbar-expand-sm bg-light " role="navigation">

<a class="navbar-brand" href="#"><h3>2hand</h3></a>
<!-- Links -->
<ul class="nav navbar-nav nav-right ">
  <li class="nav-item">
    <a class="nav-link" href="#" ><?php echo $_SESSION['username'];?></a>
  </li>
 
  <li class="nav-item">
        <a class="nav-link" href="../controller/clearsession.php">Logout</a>
      </li>
</ul>
</nav>

  <div class="container">
    <div class="row">

      <div class="space col-12"></div>
      <div class="space col-12"></div>

      <div id="tech" class="type col-2">
        <img class="pictype" src="photo/laptop.png" alt="">
        <p>เทคโนโลยี</p>
        </a>
      </div>
      <div id="sport" class="type col-2">
        <img class="pictype" src="photo/bicycle.png" alt="">
        <p>กีฬา</p>
      </div>
      <div id="car" class="type col-2">
        <img class="pictype" src="photo/car.png">
        <p>ยานพาหนะ</p>
      </div>
      <div id="house" class="type col-2">
        <img class="pictype" src="photo/house.png">
        <p>บ้านและสวน</p>
      </div>
      <div id="fashion" class="type col-2">
        <img class="pictype" src="photo/high-heels.png">
        <p>แฟชั่น</p>
      </div>
      <div id="healthy" class="type col-2">
        <img class="pictype" src="photo/diet.png">
        <p>สุขภาพ</p>
      </div>
      <div id="games" class="type col-2">
        <img class="pictype" src="photo/game-controller.png">
        <p>เกมส์</p>
      </div>
      <div id="music" class="type col-2">
        <img class="pictype" src="photo/guitar.png">
        <p>เครื่องดนตรี</p>
      </div>


    </div>




  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
  <script src="../controller/jquery.js"></script> 
</body>

</html>