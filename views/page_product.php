<!doctype html>
<?php
include("../modal/connectdb.php");
$sql = 'SELECT IMG_NAME FROM product_image WHERE Product_ID = "'.$_GET['productid'].'" ';
$query = mysqli_query($connect,$sql);
$sql2 = 'SELECT Product_Price,Telephone,Product_info,Product_Name  From product WHERE Product_ID = "'.$_GET['productid'].'"';
$query2 = mysqli_query($connect,$sql2);
$result2 = mysqli_fetch_array($query2,MYSQLI_ASSOC);
$sql3 = 'SELECT picfile FROM user INNER JOIN product WHERE user.username=product.User_Name AND Product_ID = "'.$_GET['productid'].'"';
$result3 = mysqli_query($connect,$sql3);
$sql4 = 'SELECT Fname FROM user INNER JOIN product WHERE user.username=product.User_Name AND Product_ID = "'.$_GET['productid'].'"';
$query4 = mysqli_query($connect,$sql4);
$result4 = mysqli_fetch_array($query4,MYSQLI_ASSOC);
?>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/flexslider.css">
    <link rel="stylesheet" href="../css/page_product.css">
   
    
</head>
  <body>
    <div class="container">
      <div class="row">
        <div class="space col-3" style=""></div>
  <div id="main" role="main">

      <section class="slider">
        <div id="slider" class="flexslider">
          <ul class="slides">
            <?php while($result = mysqli_fetch_array($query,MYSQLI_ASSOC)){ ?>
            <li>
  	    	    <img class="headpic" src="../product_img/<?php echo $result['IMG_NAME']; ?>" />
  	    		</li>
            <?php  } mysqli_data_seek($query, 0);?>
          </ul>
            </div>   
        <div id="carousel" class="flexslider">
          <ul class="slides">
          <?php while($result = mysqli_fetch_array($query,MYSQLI_ASSOC)){ ?>
            <li>
              
  	    	    <img class="pic" src="../product_img/<?php echo $result['IMG_NAME']; ?>" />
              
              </li>
            <?php  } ?>
          </ul>
        </div>
        
  <div class="jumbotron">
    <h1><?php echo $result2['Product_Name'];  ?></h1>
    <h2>ราคา: <?php echo $result2['Product_Price'];  ?> บาท</h2>
    <h3>ติดต่อ: <?php echo $result2['Telephone'] ?></h3>
    <h4>ชื่อผู้ขาย <?php echo $result4['Fname'] ?> </h4>
    <p><?php echo $result2['Product_info'] ?></p>
    <a href="buypage.php"> <button type="button" class="btn btn-danger">ย้อนกลับ</button> </a>
  </div>

  
      </section>    
      </div>
        </div>
        </div>
            
        
          

 <?php mysqli_close($connect); ?>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    
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
<br>

</body>
</html>