<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/register.css">
  </head>
  <body>
<form  name="form" action="../modal/register_valid.php" method="post" enctype="multipart/form-data">
<br>
<div class="container">    
<div class="row">
<div class="headregis col-2-sm-2"><h1>Register</h1></div>
<div class="space col-1"></div>
<div class="form-group col-4-sm-12">
<label for="username">Username</label>
<input type="text" name="username" id="username" class="form-control" placeholder="Your Username" pattern=".{6,}" title="Must contain at least 6 or more characters" required> <div id="spanrepeat"></div>
</div>  
<div class="form-group col-4-sm-12">
<label for="password">Password</label>
<input type="password" name="password" class="form-control" placeholder="Your Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,16}" title="Must contain at least one number and one uppercase and lowercase letter, and 8 to 16 characters" required>
</div>
</div>
</div>
<div class="row">
<div class="space col-2"></div>
<div class="form-group col-3">
<label for="Fname">Firstname:</label>
<input type="text" name="Fname" class="form-control" placeholder="Your Name" required>
</div>
<div class="form-group col-3">
<label for="Lname">Lastname </label>
<input type="text" name="Lname" class="form-control" placeholder="Your Lastname" required>
</div>
</div>     

  <div class="row">
  <div class="space col-2"></div>
<div class="form-inline col-1-sm-12">
    <label for="male">Male</label>
<input type="radio" name="gender" class="male form-control" value="Male" size="25" required> 
</div>
<div class="form-inline col-1-sm-12">
    <label for="gender">Female</label>
<input type="radio" name="gender" class="female form-control" value="Female" size="25" required> 
</div>
</div>
 
 <br>


<div class="row">
<div class="space col-2"></div>
<div class="form-group col-2-sm-6">
    <label for="date">วันเดือนปีเกิด</label>
<input type="date" name="date" id="" min="1952-01-01" class="form-control" max="2013-01-01" title="User age must not be less than 15 years. And not over 70 years old" required>
<span class="validity"></span>
</div>
</div>

<div class="row">
<div class="space col-2"></div>
<div class="form-group col-2-sm-6">
<label for="address">ที่อยู่ปัจจุบัน</label>
<textarea name="address" rows="3" cols="30" class="form-control" placeholder="123, My Street, Bigtown England" required></textarea><br><br>
</div>
</div>

<div class="row">
    <div class="space col-2"></div>
    <div class="form-group col-2-sm-6">
    <label for="telephone">Telephone</label>
<input type="text" name="telephone" size="15" value="" class="form-control" placeholder="0876543210" pattern="[+ 0-9]{10}"
title="Must contain at 10 numbers" required>
</div>

<div class="form-group col-2-sm-6">
<label for="email">Email</label>
<input type="email" name="email" size="50" value="" class="form-control" placeholder="exam00@example.com" 
pattern="[a-zA-Z0-9.-_]{1,}@[a-zA-Z.-]{2,}[.]{1}[a-zA-Z]{2,}" required><br><br>
</div>
</div>
<div class="row">
    <div class="space col-2"></div>
<div class="form-group col-2-sm-6"> 
<label for="picfile">ใส่รูปโปรไฟล์</label>
<input type="file" name="picfile" size="50" required>
<input type="hidden" name="MAX_FILE_SIZE" value="100000" required>
</div>
</div>


<div class="form-group col-2-sm-6"> 
<center>   <input type="submit" id="submit"  name="submit" value="ยืนยัน">
<input type="reset" value="Click to Reset"> 
<a href="../index.php"><button type="button">ย้อนกลับ</button></a>
</center>
</div>

</form>

</div>
 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <script src="../controller/checkrepeat.js"></script>
    </body>
</html>