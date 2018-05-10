<!doctype html>
<html lang="en">
<?php 

//อย่าลืมลบออก //
session_start();
$strAction = isset($_SESSION['username']) ? $_SESSION['username'] : '';
if($strAction==""){
    $message = "Please Login!";
    echo "<script type='text/javascript'>alert('$message');</script>";
    echo '<script>window.location.href = "../index.php";</script>';
    exit(); 
}
 $connect = mysqli_connect('localhost','root','','secondhand');
    $sql = 'SELECT Product_ID,Product_Name,IMG_HEAD,Product_Price,Product_Locate,Product_Ampher,Product_Info 
    FROM product INNER JOIN user ON product.User_Name=user.username WHERE user.username ="'.$_SESSION['username'].'"';
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
    <link href="https://fonts.googleapis.com/css?family=Gugi" rel="stylesheet">
    <link rel="stylesheet" href="../css/index.css">
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
        <?php 
        $strAction = isset($_SESSION['username']) ? $_SESSION['username'] : '';
        if($strAction==""){
            $message = "Please Login!";
            echo "<script type='text/javascript'>alert('$message');</script>";
            echo '<script>window.location.href = "../index.php";</script>';
            exit(); 
        }else{
            $connect = mysqli_connect("localhost","root","","secondhand");
            $sql = 'SELECT picfile FROM user WHERE username ="'.$_SESSION['username'].'"';
            $result = mysqli_query($connect,$sql);
            if (!$result) {
                echo mysqli_error().'<br>';
                die('Can not access database!');
            } else {
                while ($row = $result->fetch_assoc()) {
                    echo '<img class="pic2 rounded-circle" src="images/'.$row['picfile'].'" alt="">&nbsp;';
                }
                
            }
            $sql = 'SELECT Fname FROM user WHERE username ="'.$_SESSION['username'].'"';
            $result = mysqli_query($connect,$sql);
            if (!$result) {
                echo mysqli_error().'<br>';
                die('Can not access database!');
            } else {
                while ($row = $result->fetch_assoc()) {
                    echo '<a class="navbar-brand js-scroll-trigger" href="index2.php">';
            echo '<b>'.$row['Fname'].'</b>';
            echo '</a>';
                }
                
            }
        }
        mysqli_close($connect);
          ?>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="personal.php" >แก้ไขข้อมูลผู้ใช้</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="myproduct.php">สินค้าของฉัน</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="buypage.php?pdtype=tech">เทคโนโลยี</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="buypage.php?pdtype=sport">กีฬา</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="buypage.php?pdtype=car">ยานพาหนะ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="buypage.php?pdtype=home">บ้านและสวน</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="buypage.php?pdtype=fashion">แฟชั่น</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="buypage.php?pdtype=healty">สุขภาพ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="buypage.php?pdtype=games">เกม</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="buypage.php?pdtype=music">เครื่องดนตรี</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="clearsession.php" >ออกจากระบบ</a>
                    </li>
                </ul>
            </div>

            <div class="search">
                <input name="keyword" type="text" id="keyword" size="20">
                
            </div>
        </div>
    </nav>
    <br>
    <br>
        
    <br>
        <div id="showori">
        <div class="container">
        <div class="row">
        <br>
        <?php while($result = mysqli_fetch_array($query,MYSQLI_ASSOC)){ ?>
            <form name ="frmDelete" method="POST" action ="myproduct2.php">
    <div class="card " style="width:300px">
  <img class="card-img-top" style="width:auto; height:200px;" src="../product_img/<?php echo $result['IMG_HEAD']; ?>" alt="Card image">
  <div class="card-body">
    <h4 class="card-title"><?php echo $result['Product_Name']; ?></h4>
    <p class="card-text"><?php echo $result['Product_Info']; ?></p>
    <p class="card-text"><?php echo $result['Product_Price'].' บาท'; ?></p>
    <input type="hidden" name="id2" value = "<?php echo $result['Product_ID']?>" >
    <button type='submit' class="btn btn-warning" name ="smtUpdate">แก้ไขข้อมูลสินค้า</button>
    <input type="hidden" name="id" value = "<?php echo $result['Product_ID']?>" >
    &nbsp;&nbsp;&nbsp;<button type='submit' class="btn btn-danger" name ="smtDelete">ลบสินค้า</button>
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
  <script language ="JavaScript" >
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>
            <script src="../controller/scriptsearch.js"></script>
</body>

</html>