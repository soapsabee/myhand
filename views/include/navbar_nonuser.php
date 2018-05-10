
<head><link rel="stylesheet" href="../css/index.css"></head>
<nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
        <?php session_start();
        $strAction = isset($_SESSION['username']) ? $_SESSION['username'] : '';
        if($strAction==""){
            $message = "Please Login!";
            echo "<script type='text/javascript'>alert('$message');</script>";
            echo '<script>window.location.href = "../index.php";</script>';
            exit(); 
        }else{
            $connect = mysqli_connect("localhost","root","","secondhand");
            $sql = 'SELECT picfile FROM user WHERE username ="'.$_SESSION['username'].'"';
            $result = mysqli_query($connect,$sql);
            if (!$result) {
                echo mysqli_error().'<br>';
                die('Can not access database!');
            } else {
                while ($row = $result->fetch_assoc()) {
                    echo '<img class="pic2 rounded-circle" src="images/'.$row['picfile'].'" alt="">&nbsp;';
                }
                
            }
            $sql = 'SELECT Fname FROM user WHERE username ="'.$_SESSION['username'].'"';
            $result = mysqli_query($connect,$sql);
            if (!$result) {
                echo mysqli_error().'<br>';
                die('Can not access database!');
            } else {
                while ($row = $result->fetch_assoc()) {
                    echo '<a class="navbar-brand js-scroll-trigger" href="index2.php">';
            echo '<b>'.$row['Fname'].'</b>';
            echo '</a>';
                }
                
            }
        }
        mysqli_close($connect);
          ?>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="personal.php" >แก้ไขข้อมูลผู้ใช้</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="myproduct.php">สินค้าของฉัน</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="buypage.php?pdtype=tech">เทคโนโลยี</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="buypage.php?pdtype=sport">กีฬา</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="buypage.php?pdtype=car">ยานพาหนะ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="buypage.php?pdtype=home">บ้านและสวน</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="buypage.php?pdtype=fashion">แฟชั่น</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="buypage.php?pdtype=healty">สุขภาพ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="buypage.php?pdtype=games">เกม</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="buypage.php?pdtype=music">เครื่องดนตรี</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="clearsession.php" >ออกจากระบบ</a>
                    </li>
                </ul>
            </div>

            <div class="search">
                <input name="keyword" type="text" id="keyword" size="20">
                
            </div>
        </div>
    </nav>