<?php

$connect = mysqli_connect('localhost','root','','secondhand');

$filepic = array();

$sql = 'SELECT IMG_NAME FROM product_image WHERE Product_ID ="2"';
$query = mysqli_query($connect,$sql);
    
    $pic = array();
    while($rowpic = mysqli_fetch_array($query,MYSQLI_ASSOC)){
        array_push($pic,$rowpic['IMG_NAME']);
    }



    /////////////////////////////////////////////
if(isset($_FILES['picfile1']['tmp_name'])){
    $newpath1 = "product_img/".$_FILES['picfile1']['name'];
    if(($_FILES['picfile1']['tmp_name'])==''){
        $_FILES['picfile1']['name']=$pic[0];
    }else{
   move_uploaded_file($_FILES['picfile1']['tmp_name'],$newpath1);
    }
}
if(isset($_FILES['picfile2']['tmp_name'])){
   $newpath2 = "product_img/".$_FILES['picfile2']['name'];
   if(($_FILES['picfile2']['tmp_name'])==''){
    $_FILES['picfile2']['name']=$pic[1];
    }else{ 
   move_uploaded_file($_FILES['picfile2']['tmp_name'],$newpath2);
    }
}
if(isset($_FILES['picfile3']['tmp_name'])){
   $newpath3 = "product_img/".$_FILES['picfile3']['name'];
   if(($_FILES['picfile3']['tmp_name'])==''){
    $_FILES['picfile3']['name']=$pic[2];
    }else{ 
   move_uploaded_file($_FILES['picfile3']['tmp_name'],$newpath3);
    }
}
if(isset($_FILES['picfile4']['tmp_name'])){
   $newpath4 = "product_img/".$_FILES['picfile4']['name'];
   if(($_FILES['picfile4']['tmp_name'])==''){
    $_FILES['picfile4']['name']=$pic[3];
    }else{ 
   move_uploaded_file($_FILES['picfile4']['tmp_name'],$newpath4);
    }
}
if(isset($_FILES['picfile5']['tmp_name'])){
   $newpath5 = "product_img/".$_FILES['picfile5']['name'];
   if(($_FILES['picfile5']['tmp_name'])==''){
    $_FILES['picfile5']['name']=$pic[4];
    }else{ 
   move_uploaded_file($_FILES['picfile5']['tmp_name'],$newpath5);
    }
}
if(isset($_FILES['picfile6']['tmp_name'])){
    $newpath6 = "product_img/".$_FILES['picfile5']['name'];
    if(($_FILES['picfile6']['tmp_name'])==''){
        $_FILES['picfile6']['name']=$pic[5];
        }else{ 
       move_uploaded_file($_FILES['picfile6']['tmp_name'],$newpath6);
        }
 }

 if(isset($_FILES['picfile7']['tmp_name'])){
    $newpath7 = "product_img/".$_FILES['picfile5']['name'];
    if(($_FILES['picfile7']['tmp_name'])==''){
        $_FILES['picfile7']['name']=$pic[6];
        }else{ 
       move_uploaded_file($_FILES['picfile7']['tmp_name'],$newpath7);
        }
 }

 if(isset($_FILES['picfile8']['tmp_name'])){
    $newpath8 = "product_img/".$_FILES['picfile5']['name'];
    if(($_FILES['picfile8']['tmp_name'])==''){
        $_FILES['picfile8']['name']=$pic[7];
        }else{ 
       move_uploaded_file($_FILES['picfile8']['tmp_name'],$newpath8);
        }
 }

 if(isset($_FILES['picfile9']['tmp_name'])){
    $newpath9 = "product_img/".$_FILES['picfile9']['name'];
    if(($_FILES['picfile9']['tmp_name'])==''){
        $_FILES['picfile9']['name']=$pic[8];
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

$sql = 'SELECT IMG_ID FROM product_image WHERE Product_ID="2"';
$query = mysqli_query($connect,$sql);
$imgid = array();
while($rowimg = mysqli_fetch_array($query,MYSQLI_ASSOC)){
    array_push($imgid,$rowimg['IMG_ID']);
}

//อย่าลืมลบ ไอ soap ออก เอา $_SESSION['username'] มาใส่แทน
$sql = 'UPDATE product SET Product_Name ="'.$_POST['headproduct'].'", IMG_HEAD="'.$_FILES['picfile1']['name'].'", User_Name="Soap", Product_Price="'.$_POST['pdprice'].'", Product_Date=NOW(), Product_Locate="'.$_POST['province'].'", Product_Ampher="'.$_POST['ampher'].'", Product_Info="'.$_POST['info_pd'].'", Telephone="'.$_POST['tel_phone'].'", Product_Type="'.$_POST['typeproduct'].'" WHERE Product_ID="2"' ;
$query = mysqli_query($connect,$sql);

if(!$query){

    die(mysqli_error($connect));

}
else{
    
    echo "OK";
}
$i = 0;
while($i < count($filepic)){$sql = 'UPDATE product_image SET IMG_NAME="'.$filepic[$i].'" WHERE IMG_ID="'.$imgid[$i].'"';
    
$query = mysqli_query($connect,$sql);    
$i++;
}
if(!$query){

    die(mysqli_error($connect));

}
else{
    
    echo "OK";
}
mysqli_close($connect); 
?>