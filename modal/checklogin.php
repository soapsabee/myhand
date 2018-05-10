<?php
    session_start();
    include('connectdb.php');
    date_default_timezone_set('Asia/Bangkok');
    $time = date("H:i:s");
    $sql = 'SELECT * FROM user WHERE username = "'.$_POST['username'].'" AND password = "'.$_POST['password'].'"';
    $logsql = 'INSERT INTO login_time(Log_id, Log_time, Log_date, username) VALUES (NULL,"'.$time.'",CURDATE(),"'.$_POST['username'].'")';
    $query = mysqli_query($connect,$sql);
    $result = mysqli_num_rows($query);
    $check = mysqli_fetch_array($query,MYSQLI_ASSOC);
    if($result <= 0){
        echo "NO";
    }
    else if($check['Status']=='User'){
       echo "you can login";
       $_SESSION['username'] = $_POST['username'];
       $logquery = mysqli_query($connect,$logsql);
    }else{
        echo "Welcome Admin";
        $_SESSION['username'] = $_POST['username'];
        $logquery = mysqli_query($connect,$logsql);
    }
    
    mysqli_close($connect);   




?>