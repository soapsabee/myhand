<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/register.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>
  <body>
      
<?php
$connect = mysqli_connect("localhost","root","","secondhand");
$sql = 'INSERT INTO user
VALUES ("'.$_POST["username"].'","'.$_POST["password"].'","'.$_FILES['picfile']['name'].'", "'.$_POST["Fname"].'", "'.$_POST["Lname"].'",
"'.$_POST["gender"].'", "'.$_POST["date"].'", "'.$_POST["address"].'", "'.$_POST["telephone"].'", "'.$_POST["email"].'","User")';
$result = mysqli_query($connect,$sql);
if (!$result) {
    echo mysqli_error().'<br>';
    die('Can not access database!');
} else {

$date = $_POST['date'];



$newfile = '../views/images/' . $_FILES['picfile']['name'];
if (copy($_FILES['picfile']['tmp_name'], $newfile)) {
    echo '<br><br><br>';
    echo '<center><table align="center">';
    echo '<tr>';
    echo '<td>';
    echo '<img  class="pic1" src="' . $newfile . '">';
    echo '</td>';
    echo '</tr>';
    echo '</table>';
    echo '<br><br>';
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}




echo '<center><table border = 1 bgcolor="white"><wight=100 hight=20>';
echo '<tr>';
echo '<td>';
$FnameErr = $LnameErr = $genderErr = $addressErr = $telephoneErr = $emailErr = '';
$Fname = $Lname = $gender = $address = $telephone = $email = '';



$Fname = test_input($_POST["Fname"]);
if (!preg_match("/^[a-zA-Z ]*$/", $Fname)) {
    $FnameErr = "Only letters and Complete the information";
    echo"Firstname : ";
    echo "<font color=\"#FF0000\">*$FnameErr</font>";
    echo'<br>';
} else {
    echo"Firstname : " . $_POST["Fname"];
    echo'<br>';
}


$Lname = test_input($_POST["Lname"]);
if (!preg_match("/^[a-zA-Z ]*$/", $Lname)) {
    $LnameErr = "Only letters and Complete the information";
    echo"Lastname : ";
    echo "<font color=\"#FF0000\">*$LnameErr</font>";
    echo'<br>';
} else {
    echo"Lastname : " . $_POST["Lname"];
    echo'<br>';
}

if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
    echo"Gender : ";
    echo "<font color=\"#FF0000\">*$genderErr</font>";
    echo'<br><br>';
} else {
    echo"Gender : " . $_POST["gender"];
    echo'<br>';
}


    echo"Birthdate : " . $_POST["date"];
    echo'<br>';




$address = test_input($_POST["address"]);
if (!preg_match("/^[a-zA-Z ]*$/", $Lname)) {
    $addressErr = "Complete the information";
    echo"Address:";
    echo "<font color=\"#FF0000\">*$addressErr</font>";
    echo'<br><br>';
} else {
    echo"Address : " . $_POST["address"];
    echo'<br>';
}


$telephone = test_input($_POST["telephone"]);
if (!preg_match("/^[0-9]+(\s[0-9]+)*$/", $telephone)) {
    $telephoneErr = "Only number";
    echo"Telephone : ";
    echo "<font color=\"#FF0000\">*$telephoneErr</font>";
    echo'<br><br>';
} else {
    echo"Telephone : " . $_POST["telephone"];
    echo'<br>';
}




$email = test_input($_POST["email"]);
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $emailErr = "Invalid email format";
    echo"Email : ";
    echo "<font color=\"#FF0000\">*  $emailErr</font>";
    echo'<br><br>';
} else {
    echo"Email : " . $_POST["email"];
    echo'<br>';
}



echo '</tr>';
echo '</td>';
echo '<table>';
}
mysqli_close($connect);
?>
<br>
<button onClick = "window.location ='../index.php'">INDEX</button>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>