<?php

function search($text){

    
 $connect = mysqli_connect('localhost','root','','secondhand');
 $text = mysqli_real_escape_string($connect, $text);
 if($text==''){
 $sql = 'SELECT Product_ID,Product_Name,IMG_HEAD,Product_Price,Product_Locate,Product_Ampher FROM product'; 
 }else{
 $sql = "SELECT Product_ID,Product_Name,IMG_HEAD,Product_Price,Product_Locate,Product_Ampher FROM product WHERE Product_Name LIKE '%".$text."%'";
 }
 $query = mysqli_query($connect,$sql);
 while($result = mysqli_fetch_array($query,MYSQLI_ASSOC)){
echo'<div class="card" style="width:300px">';
echo'<img class="card-img-top" style="width:auto; height:200px;" src="../product_img/'.$result['IMG_HEAD'].'"alt="Card image">';
echo'<div class="card-body">';
echo'<h4 class="card-title">'.$result['Product_Name'].'</h4>';
echo'<p class="card-text">'.$result['Product_Locate'].'</p>';
echo'<p class="card-text">'.$result['Product_Price'].' บาท'.'</p>';
echo'<a href="../views/page_product.php?productid='.$result['Product_ID'].'class="btn btn-primary">Detail</a>';
echo'</div>';
echo '</div>';
 

 }
}
search($_GET['txt']);

?>