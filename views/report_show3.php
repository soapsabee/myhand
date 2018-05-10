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
 
 if(isset($_POST['province']) && isset($_POST['month'])){
     $province = $_POST['province'];
     $month = $_POST['month'];
     $connect = mysqli_connect('localhost','root','','secondhand');
     mysqli_query($connect, "SET NAMES UTF8");
     $sql = "SELECT Product_Type,COUNT(*) AS 'Count' FROM product WHERE Product_Date LIKE '%-$month-%' AND Product_Locate LIKE '$province' GROUP BY Product_Type";
     $query = mysqli_query($connect,$sql);



?>
<br><br>
<center><table border="10" bgcolor="white"></center>
<tr>
<th>ประเภทสินค้า</th>
<th>จำนวนครั้งที่ประกาศขาย</th>
</tr>
 
<?php while($result = mysqli_fetch_array($query,MYSQLI_ASSOC)){ ?>
        <tr>
            <td><?php echo $result['Product_Type']; ?></td>
            <td><?php echo $result['Count']; ?></td>
        </tr>
<?php  } ?>
</table>
<?php
  }
?>
<br><br>
<button type="button" class="btn btn-defualt" onClick="window.location ='../FusionCharts_Evaluation/Code/PHP/DB/graph3.php?month=<?php echo $month?>&province=<?php echo $province ?>'">ดูกราฟ</button>
<button type="button" class="btn btn-defualt" onClick="window.location ='report_product.php'">ย้อนกลับ</button>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
  <?php mysqli_close($connect); ?>
</html>