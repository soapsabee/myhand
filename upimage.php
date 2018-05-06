<?php
if(isset($_FILES['picfile1']['tmp_name'])){
    $newpath1 = "image/".$_FILES['picfile1']['name'];
   move_uploaded_file($_FILES['picfile1']['tmp_name'],$newpath1);
}
if(isset($_FILES['picfile2']['tmp_name'])){
   $newpath2 = "image/".$_FILES['picfile2']['name'];
   move_uploaded_file($_FILES['picfile2']['tmp_name'],$newpath2);
}
if(isset($_FILES['picfile3']['tmp_name'])){
   $newpath3 = "image/".$_FILES['picfile3']['name'];
   move_uploaded_file($_FILES['picfile3']['tmp_name'],$newpath3);
}
if(isset($_FILES['picfile4']['tmp_name'])){
   $newpath4 = "image/".$_FILES['picfile4']['name'];
   move_uploaded_file($_FILES['picfile4']['tmp_name'],$newpath4);
}
if(isset($_FILES['picfile5']['tmp_name'])){
   $newpath5 = "image/".$_FILES['picfile5']['name'];
   move_uploaded_file($_FILES['picfile5']['tmp_name'],$newpath5);
}
?>