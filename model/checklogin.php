<?php
    session_start();
    include('connectdb.php');
    $sql = 'SELECT * FROM User WHERE User_Name = "'.$_POST['username'].'" AND User_Password = "'.$_POST['password'].'"';
    $query = mysqli_query($connect,$sql);
    $result = mysqli_num_rows($query);

    if($result <= 0){
        echo "NO";
    }
    else{
       echo "you can login";
       $_SESSION['username'] = $_POST['username'];
       header("location:../views/index_user.php");
    }
       




?>