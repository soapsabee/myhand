<?php 

$connect = mysqli_connect('localhost','root','','secondhand');

if(!$connect){
 echo die(mysqli_error());
}

?>