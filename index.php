<!doctype html>
<html lang="en">

<head>
    <title>Index</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css" media="all" type="text/css">
</head>
<?php include("views/include/modalLogin.html"); ?>
<body>
    
    
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger">
                <b>2Hand</b>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="" data-toggle="modal" data-target="#myModal" id="login">ลงชื่อเข้าใช้</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="views/buypage.php?pdtype=tech">เทคโนโลยี</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="views/buypage.php?pdtype=sport">กีฬา</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="views/buypage.php?pdtype=car">ยานพาหนะ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="views/buypage.php?pdtype=home">บ้านและสวน</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="views/buypage.php?pdtype=fashion">แฟชั่น</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="views/buypage.php?pdtype=healty">สุขภาพ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="views/buypage.php?pdtype=games">เกม</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="views/buypage.php?pdtype=music">เครื่องดนตรี</a>
                    </li>
                </ul>
            </div>


            <div class="search">
                <form method='get' action='views/buypage.php' > 
                    <input name="keyword" type="text" id="keyword" size="20">
                    <input name="iFind" type="submit" id="iFind" value="Find">
                </form>
            </div>
        </div>
    </nav>
        
      
    <br>
    <br>
    <br>
    <br>
    <br>
    
    
    <div class="container">
    <div class="row">
        <div class="space col-12"></div>
        <div id="buy" class="select col-6" data-toggle="modal" data-target="#myModal">อยากซื้อ...<img class="picbuy" src="views/photo/buy.png" alt=""></div>
        <div id="sell" class="select col-6" data-toggle="modal" data-target="#myModal"><img class="picbuy" src="views/photo/exchange.png" alt="">...อยากขาย</div>
        
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
        <script src="controller/scriptlogin.js"></script>
</body>

</html>