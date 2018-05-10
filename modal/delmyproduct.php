<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>
  <body>
  <?php
  session_start();
  $strAction = isset($_SESSION['username']) ? $_SESSION['username'] : '';
  if($strAction==""){
      $message = "Please Login!";
      echo "<script type='text/javascript'>alert('$message');</script>";
      echo '<script>window.location.href = "index.php";</script>';
      exit(); 
  }
$connect = mysqli_connect('localhost','root','','secondhand');
$sql = 'DELETE FROM product WHERE Product_ID="'.$_POST['id'].'"';
$query = mysqli_query($connect,$sql);
$sql2 = 'DELETE FROM product_image WHERE Product_ID="'.$_POST['id'].'"';
$query2 = mysqli_query($connect,$sql2);

if($query && $query2){
header('Location:../views/myproduct.php');

}else{
echo "SQL ERROR";
}

mysqli_close($connect);
mysqli_close($connect); 

?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>