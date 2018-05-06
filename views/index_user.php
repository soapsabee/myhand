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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
                <a class="nav-link" href="clearsession.php" id="logout">Logout</a>
              </li>
        </ul>
      </nav>

    <div class="container">
        <div class="row">
            <div class="space col-12"></div>
            <div id="buy" class="select col-6">อยากซื้อ...<a href="myhand_shop_user.php"><img class="picbuy" src="photo/buy.png" alt=""></a></div>
            <div id="sell" class="select col-6"><a href="myhand_shop_sell.html"><img class="picbuy" src="photo/exchange.png" alt=""></a>...อยากขาย</div>
            
        </div>
        <div class="space col-12"></div>




    </div>


    <div class="jumbotron jumbotron-fluid">
            <div class="container">
              <h1>2hand "ตลาดซื้อขายสินค้ามือสอง"</h1> 
              <p>เว็ปไซต์ที่จะทำให้คุณสามารถซื้อขายสินค้ามือสอง </p> 
              <p style="text-align:right;">@Design By:Patiphan</p>
            </div>
          </div>


         








    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   
  </body>
</html>