<?php
session_start();
$connect = mysqli_connect('localhost','root','','secondhand');

$filepic = array();

if(isset($_FILES['picfile1']['tmp_name'])){
    $newpath1 = "../product_img/".$_FILES['picfile1']['name'];
    if(($_FILES['picfile1']['tmp_name'])==''){
        $_FILES['picfile1']['name']="default.jpg";
    }else{
   move_uploaded_file($_FILES['picfile1']['tmp_name'],$newpath1);
    }
}
if(isset($_FILES['picfile2']['tmp_name'])){
   $newpath2 = "../product_img/".$_FILES['picfile2']['name'];
   if(($_FILES['picfile2']['tmp_name'])==''){
    $_FILES['picfile2']['name']="default.jpg";
    }else{ 
   move_uploaded_file($_FILES['picfile2']['tmp_name'],$newpath2);
    }
}
if(isset($_FILES['picfile3']['tmp_name'])){
   $newpath3 = "../product_img/".$_FILES['picfile3']['name'];
   if(($_FILES['picfile3']['tmp_name'])==''){
    $_FILES['picfile3']['name']="default.jpg";
    }else{ 
   move_uploaded_file($_FILES['picfile3']['tmp_name'],$newpath3);
    }
}
if(isset($_FILES['picfile4']['tmp_name'])){
   $newpath4 = "../product_img/".$_FILES['picfile4']['name'];
   if(($_FILES['picfile4']['tmp_name'])==''){
    $_FILES['picfile4']['name']="default.jpg";
    }else{ 
   move_uploaded_file($_FILES['picfile4']['tmp_name'],$newpath4);
    }
}
if(isset($_FILES['picfile5']['tmp_name'])){
   $newpath5 = "../product_img/".$_FILES['picfile5']['name'];
   if(($_FILES['picfile5']['tmp_name'])==''){
    $_FILES['picfile5']['name']="default.jpg";
    }else{ 
   move_uploaded_file($_FILES['picfile5']['tmp_name'],$newpath5);
    }
}
if(isset($_FILES['picfile6']['tmp_name'])){
    $newpath6 = "../product_img/".$_FILES['picfile5']['name'];
    if(($_FILES['picfile6']['tmp_name'])==''){
        $_FILES['picfile6']['name']="default.jpg";
        }else{ 
       move_uploaded_file($_FILES['picfile6']['tmp_name'],$newpath6);
        }
 }

 if(isset($_FILES['picfile7']['tmp_name'])){
    $newpath7 = "../product_img/".$_FILES['picfile5']['name'];
    if(($_FILES['picfile7']['tmp_name'])==''){
        $_FILES['picfile7']['name']="default.jpg";
        }else{ 
       move_uploaded_file($_FILES['picfile7']['tmp_name'],$newpath7);
        }
 }

 if(isset($_FILES['picfile8']['tmp_name'])){
    $newpath8 = "../product_img/".$_FILES['picfile5']['name'];
    if(($_FILES['picfile8']['tmp_name'])==''){
        $_FILES['picfile8']['name']="default.jpg";
        }else{ 
       move_uploaded_file($_FILES['picfile8']['tmp_name'],$newpath8);
        }
 }

 if(isset($_FILES['picfile9']['tmp_name'])){
    $newpath9 = "../product_img/".$_FILES['picfile9']['name'];
    if(($_FILES['picfile9']['tmp_name'])==''){
        $_FILES['picfile9']['name']="default.jpg";
        }else{ 
       move_uploaded_file($_FILES['picfile9']['tmp_name'],$newpath9);
        }
 }





 array_push($filepic,$_FILES['picfile1']['name']);
 array_push($filepic,$_FILES['picfile2']['name']);
 array_push($filepic,$_FILES['picfile3']['name']);
 array_push($filepic,$_FILES['picfile4']['name']);
 array_push($filepic,$_FILES['picfile5']['name']);
 array_push($filepic,$_FILES['picfile6']['name']);
 array_push($filepic,$_FILES['picfile7']['name']);
 array_push($filepic,$_FILES['picfile8']['name']);
 array_push($filepic,$_FILES['picfile9']['name']);

$sql = 'SELECT Product_ID FROM product ORDER BY Product_ID DESC LIMIT 1';
$query = mysqli_query($connect,$sql);
$resultid = mysqli_fetch_array($query,MYSQLI_NUM);
$productid = $resultid[0]+1;

//อย่าลืมลบ
$sql = 'INSERT INTO product (Product_ID, Product_Name, IMG_HEAD, User_Name, Product_Price, Product_Date, Product_Locate, Product_Ampher, Product_Info, Telephone, Product_Type) VALUES("'.$productid.'","'.$_POST['headproduct'].'","'.$_FILES['picfile1']['name'].'","'.$_SESSION['username'].'","'.$_POST['pdprice'].'",NOW(),"'.$_POST['province'].'","'.$_POST['ampher'].'","'.$_POST['info_pd'].'","'.$_POST['tel_phone'].'","'.$_POST['typeproduct'].'")';
$query = mysqli_query($connect,$sql);
$errors = 0;
if(!$query){

    die(mysqli_error($connect));
    $errors++;
}

$i = 0;
while($i < count($filepic)){$sql = 'INSERT INTO product_image (IMG_ID,IMG_NAME,Product_ID) VALUES(NULL,"'.$filepic[$i].'","'.$productid.'")';
    
$query = mysqli_query($connect,$sql);    
$i++;
}
if(!$query){

    die(mysqli_error($connect));
    $errors++;
}

if($errors==0){
    mysqli_close($connect); 
    header("location:../views/myproduct.php"); 
}
้้
?>