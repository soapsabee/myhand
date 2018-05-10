<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>
  <body>
  <?php
    if(isset($_POST['province'])){
        
        $province = $_POST['province'];
        $connect = mysqli_connect('localhost','root','','secondhand');
        mysqli_query($connect, "SET NAMES UTF8");
        $sql = "SELECT Product_ID,Product_Name,User_Name,Product_Price,Product_Locate,Product_Ampher FROM product 
        WHERE Product_Locate LIKE '$province'";
        $query = mysqli_query($connect,$sql);
   

?>
<br><br>
 <center><table border="10" bgcolor="white"></center>
        <tr>
        <th>Product_ID</th>
    <th>ProductName</th>
    <th>Username</th>
    <th>Price</th>
    <th>Province</th>
    <th>Ampher</th>
        </tr>
   
<?php while($result = mysqli_fetch_array($query,MYSQLI_ASSOC)){ ?>

    <tr>
    <td><?php echo $result['Product_ID']; ?></td>
    <td><?php echo $result['Product_Name']; ?></td>
    <td><?php echo $result['User_Name']; ?></td>
    <td><?php echo $result['Product_Price']; ?></td>
    <td><?php echo $result['Product_Locate']; ?></td>
    <td><?php echo $result['Product_Ampher']; ?></td>
    </tr>
<?php  } ?>
 </table>
    <?php } ?>
    <br><br>
<button type="button" class="btn btn-defualt" onClick="window.location ='report_product.php'">ย้อนกลับ</button>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
  <?php mysqli_close($connect); ?>
</html>