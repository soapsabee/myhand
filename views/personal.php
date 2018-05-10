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
    echo '<script>window.location.href = "../index.php";</script>';
    exit(); 
}

$connect = mysqli_connect("localhost","root","","secondhand");
echo '<br>';
echo '<center><table bgcolor="white" align="center">';
echo '<tr>';
echo '<td>';
$sql = 'SELECT * FROM user WHERE username ="'.$_SESSION['username'].'"';
$result = mysqli_query($connect,$sql);
if (!$result) {
    echo mysqli_error().'<br>';
    die('Can not access database!');
}

?>      
<form method ='post' action = '../modal/personal_updated.php' enctype="multipart/form-data">    
       <div class="container">
       <?php $row = mysqli_fetch_array($result,MYSQLI_ASSOC) ?>
       <div class="row ">
       <div class="picpro col-5" style="border:solid black 2px; width:300px; height:300px; background-image:url(images/<?php echo $row['picfile'] ?>); background-repeat:no-repeat; background-size:500px 300px;"></div>
        <div class="crop col-6">
        <div class="form-group col-4">
          <label for="username">Username</label>
          <input type="text" class="form-control" name="user2" id="" value="<?php echo $row['username']?>" aria-describedby="helpId" placeholder="" readonly>
         
        </div>
    
        <div class="form-group col-4">
          <label for="password">Password</label>
          <input type="password" class="form-control" name="pass" value="<?php echo $row['password']?>" id="" placeholder="">
        </div>

        <div class="form-group col-6">
          <label for="choosepic"></label>
          <input type="file" class="form-control-file" value="100000" name="picfile"  id="" placeholder="" aria-describedby="fileHelpId">
        
        </div>
        </div>
        </div>

        <div class="row">

            <div class="form-group col-4">
              <label for=""></label>
              <input type="text" class="form-control" name="Fname"  value="<?php echo $row['Fname']?>" id="" aria-describedby="helpId" placeholder="">
            
            </div>

            <div class="form-group col-4">
              <label for=""></label>
              <input type="text" class="form-control" name="Lname" value="<?php echo $row['Lname']?>" id="" aria-describedby="helpId" placeholder="">
              
            </div>
            <?php if ($row['gender']=="Male"){ ?>
            <div class="form-inline col-1-sm-12">
                 <label for="male">Male</label>
            <input type="radio" name="gender" class="male form-control" value="Male" size="25" checked> 
                </div>
            <div class="form-inline col-1-sm-12">
                 <label for="gender">Female</label>
        <input type="radio" name="gender" class="female form-control" value="Female" size="25" > 
        </div>
        <?php  } 

         elseif($row['gender']=="Female"){ ?>
            <div class="form-inline col-1-sm-12">
                 <label for="male">Male</label>
            <input type="radio" name="gender" class="male form-control" value="Male" size="25" > 
                </div>
            <div class="form-inline col-1-sm-12">
                 <label for="gender">Female</label>
        <input type="radio" name="gender" class="female form-control" value="Female" size="25" checked> 
        </div>
        <?php  } ?>
           
           <div class="form-group col-12">
             <label for="">วันเกิด</label>
             <input type="date" value ="<?php echo $row['dob']; ?>"
               class="form-control" name="date" id="" aria-describedby="helpId" placeholder="">
             <small id="helpId" class="form-text text-muted">Help text</small>
           </div>

           <div class="form-group col-12">
             <label for="">ที่อยู่</label>
             <input type="text"
               class="form-control" name="address" id="" value="<?php echo $row['address'] ?>" aria-describedby="helpId" placeholder="">
           </div>

           <div class="form-group col-12">
             <label for="">เบอร์โทรศัพท์</label>
             <input type="text"
               class="form-control" name="tele" id="" value="<?php echo $row['telephone']; ?>" aria-describedby="helpId" placeholder="">
           </div>



            <div class="form-group col-12">
              <label for="">อีเมล์</label>
              <input type="email" class="form-control" name="email" id="" value="<?php echo $row['email']; ?>" aria-describedby="emailHelpId" placeholder="">
            
            </div>

        
        </div>

        <button type="submit" class="btn btn-primary">UPDATE</button>
        <a href="index2.php"><button type="button" class="btn btn-link">INDEX</button></a>
            </form>
        </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>