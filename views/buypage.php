<!doctype html>
<html lang="en">
<?php 


 $connect = mysqli_connect('localhost','root','','secondhand');

 if(isset($_GET['keyword']) && $_GET['keyword']!=''){
    $sql = 'SELECT Product_ID,Product_Name,IMG_HEAD,Product_Price,Product_Locate,Product_Ampher,Product_Info  FROM product WHERE Product_Name LIKE "'.$_GET['keyword'].'"';
 }
 else if(isset($_GET['pdtype'])){
 $sql = 'SELECT Product_ID,Product_Name,IMG_HEAD,Product_Price,Product_Locate,Product_Ampher,Product_Info  FROM product  WHERE Product_Type LIKE "'.$_GET['pdtype'].'"';
 }
 else{
    $sql = 'SELECT Product_ID,Product_Name,IMG_HEAD,Product_Price,Product_Locate,Product_Ampher,Product_Info  FROM product ORDER BY Product_ID DESC';
 }
 $query = mysqli_query($connect,$sql);


?>

<head>
    <title>BUY</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <link rel="stylesheet" href="../css/buypage.css">
    <link rel="stylesheet" href="../css/index.css">
    <link href="https://fonts.googleapis.com/css?family=Gugi" rel="stylesheet">
</head>

<body>
<?php include("include/navbar_nonuser.php"); ?>
    <br>
    <br>
        
    <br>
        <div id="showori">
        <div class="container">
        <div class="row">
        <?php while($result = mysqli_fetch_array($query,MYSQLI_ASSOC)){ ?>
            <br>
    <div class="card " style="width:300px">
  <img class="card-img-top" style="width:auto; height:200px;" src="../product_img/<?php echo $result['IMG_HEAD']; ?>" alt="Card image">
  <div class="card-body">
    <h4 class="card-title"><?php echo $result['Product_Name']; ?></h4>
    <p class="card-text"><?php echo $result['Product_Info']; ?></p>
    <p class="card-text"><?php echo $result['Product_Price'].' บาท'; ?></p>
    <a href="page_product.php?productid=<?php echo $result['Product_ID']?>" class="btn btn-primary">Detail</a>
 
 </div>
</div>
<?php } ?>
        </div>
        </div>
        </div>
        
            
            
            <div class="container">
            <div class="row" id="showup">

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
            <script src="../controller/scriptsearch.js"></script>
</body>

</html>