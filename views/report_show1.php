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

    if(isset($_POST['month']) && isset($_POST['year']) ){
        $year = $_POST['year'];
        $month = $_POST['month'];
        $connect = mysqli_connect('localhost','root','','secondhand');
        $sql = "SELECT Fname,Lname,User_Name,COUNT(*) AS 'Count' FROM user INNER JOIN product ON user.username=product.User_Name WHERE Product_Date LIKE '$year-$month%' GROUP BY User_Name";
        $query = mysqli_query($connect,$sql);
        $total = 0;
?>
  <br><br> 
    <center><table border="10" bgcolor="white"></center>
        <tr>
        <th>FirstName</th>
        <th>LastName</th>
        <th>Username</th>
        <th>จำนวนครั้งที่ประกาศขาย</th>
        </tr>
<?php while($result = mysqli_fetch_array($query,MYSQLI_ASSOC)){ ?>
        <tr>
          <td><?php echo $result['Fname']?></td>
          <td><?php echo $result['Lname']?></td>
          <td><?php echo $result['User_Name']; ?></td>
            <td><?php echo $result['Count']; ?></td>
        </tr>
     <?php $total = $total + $result['Count']; ?>
<?php  }?>

        </table>
         Total:<?php echo $total; ?>
      
   <?php  }
?>
<br><br>
<button type="button" class="btn btn-defualt" onClick="window.location ='../FusionCharts_Evaluation/Code/PHP/DB/graph1.php?month=<?php echo $_POST['month']; ?>&year=<?php echo $_POST['year']; ?>'">ดูกราฟ</button>
<button type="button" class="btn btn-defualt" onClick="window.location ='../views/report_product.php'">ย้อนกลับ</button>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>


