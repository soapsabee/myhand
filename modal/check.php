<?php
if($_POST['user_name']==''){
    exit();
}

$connect = mysqli_connect('localhost','root','','secondhand');
$sql = 'SELECT username FROM user WHERE username="'.$_POST['user_name'].'"';
$query = mysqli_query($connect,$sql);

$row = mysqli_num_rows($query);

if($row > 0){
    echo '&nbsp;<span class="text-danger">Username นี้มีผู้ใช้แล้ว กรุณาใช้ชื่ออื่น</span>';
}

mysqli_close($connect); 
?>