<!doctype html>
<html lang="en">
  <head>
    <title>UpdateComplete</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/cpersonal.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>
  <body>
  <?php
session_start();

$strAction = isset($_SESSION['username']) ? $_SESSION['username'] : '';
if($strAction==""){
    $message = "Please Login!";
    echo "<script type='text/javascript'>alert('$message');</script>";
    echo '<script>window.location.href = "../index.php";</script>';
    exit(); 
}
$connect = mysqli_connect("localhost","root","","secondhand");
$newfile = '../views/images/' . $_FILES['picfile']['name'];
if (empty($_FILES['picfile']['tmp_name'])) {
  $sql = 'UPDATE user SET username="'.$_POST['user2'].'",password="'.$_POST['pass'].'",Fname="'.$_POST['Fname'].'",Lname="'.$_POST['Lname'].'",
gender="'.$_POST['gender'].'",dob="'.$_POST['date'].'",address="'.$_POST['address'].'",telephone="'.$_POST['tele'].'",email="'.$_POST['email'].'" WHERE username ="'.$_SESSION['username'].'"';
} else if (copy($_FILES['picfile']['tmp_name'], $newfile)){
  $sql = 'UPDATE user SET username="'.$_POST['user2'].'",password="'.$_POST['pass'].'",picfile="'.$_FILES['picfile']['name'].'",Fname="'.$_POST['Fname'].'",Lname="'.$_POST['Lname'].'",
gender="'.$_POST['gender'].'",dob="'.$_POST['date'].'",address="'.$_POST['address'].'",telephone="'.$_POST['tele'].'",email="'.$_POST['email'].'" WHERE username ="'.$_SESSION['username'].'"';
}

$result = mysqli_query($connect,$sql);
if (!$result) {
    echo mysqli_error().'<br>';
    die('Can not access database!');
} else {
  echo '<br>';
  echo '<center><table border="1" bgcolor="white" cellspacing="10">';
    echo '<tr>';
    echo '<td>';
    echo 'Congratulation! The record is update.';
	 echo '</td>';
    echo '</tr>';
	echo '</table>';
}
mysqli_close($connect);        
?>
<button type="button" class="btn btn-link" onClick = "window.location ='../views/index2.php'">INDEX</button>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>