<!doctype html>
<?php
include("../model/connectdb.php");
$sql = 'SELECT IMG_NAME FROM product_image WHERE Product_ID = "'.$_GET['productid'].'" ';
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
    <link rel="stylesheet" href="css/flexslider.css">
    <link rel="stylesheet" href="css/page_product.css">
    
</head>
  <body>


    <nav class="navbar navbar-expand-sm bg-light justify-content-center" role="navigation">

<a class="navbar-brand" href="#"><h3>2hand</h3></a>
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
  <div class="information col-6">
    <div class="contact col-6">ราคา บาท</div>
    <div class="contact col-6">รูปคนขาย</div>
    <div class="contact col-12">คุยกับผู้ขาย</div>
    <div class="contact col-12">เบอร์โทรติดต่อ</div>

    <div class="showinfo col-12">
      asdasdasd
    </div>
  </div>
<div class="boxslider col-6" >

	<div id="main" role="main">
  
      <section class="slider">
    
        <div id="slider" class="flexslider">
          <ul class="slides">
            <?php while($result = mysqli_fetch_array($query,MYSQLI_ASSOC)){ ?>
            <li>
  	    	    <img class="headpic" src="photo/<?php echo $result['IMG_NAME']; ?>" />
  	    		</li>
            <?php  } mysqli_data_seek($query, 0);?>
          </ul>
        </div>
          
        <div id="carousel" class="flexslider">
          <ul class="slides">
          <?php while($result = mysqli_fetch_array($query,MYSQLI_ASSOC)){ ?>
            <li>
  	    	    <img class="pic" src="photo/<?php echo $result['IMG_NAME']; ?>" />
  	    		</li>
            <?php  } ?>
          </ul>
        </div>
        
      </section>  
          </div>
          </div>

          

 </div>

 </div>

      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="page_product.js"></script>
    
     <!-- FlexSlider -->
  <script defer src="../controller/jquery.flexslider.js"></script>

<script type="text/javascript">
  $(function(){
    SyntaxHighlighter.all();
  });
  $(window).load(function(){
    $('#carousel').flexslider({
      animation: "slide",
      controlNav: false,
      animationLoop: false,
      slideshow: false,
      itemWidth: 105,
      itemMargin: 5,
      asNavFor: '#slider'
    });

    $('#slider').flexslider({
      animation: "slide",
      controlNav: false,
      animationLoop: false,
      slideshow: false,
      sync: "#carousel",
      start: function(slider){
        $('body').removeClass('loading');
      }
    });
  });
</script>

</body>
</html>