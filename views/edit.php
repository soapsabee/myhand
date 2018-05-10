<!doctype html>
<html lang="en">
<?php 
    $connect = mysqli_connect('localhost','root','','secondhand');
    $sql = 'SELECT Product_Name,Product_Price,Product_Locate,Product_Ampher,Product_info,Telephone,IMG_NAME FROM product_image INNER JOIN product ON product_image.Product_ID = product.Product_ID WHERE product.Product_ID=2';
    $query = mysqli_query($connect,$sql);
    
    $pic = array();
    while($rowpic = mysqli_fetch_array($query,MYSQLI_ASSOC)){
        array_push($pic,$rowpic['IMG_NAME']);
    }
    mysqli_data_seek($query, 0);
    $result = mysqli_fetch_array($query,MYSQLI_ASSOC);
    
    
?>
<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
    crossorigin="anonymous">
  <link rel="stylesheet" href="../css/insertproduct.css">
  
</head>

<body>
<form action="editproduct.php" method="post" enctype="multipart/form-data" id="uploadForm">
    <div class="container">
      <div class="row">
      
  <div class="form-group col-6">
    <label for="typeproduct" >เลือกหมวดหมู่สินค้า</label>
    <select class="form-control" name="typeproduct" id="">
      <option value="tech">เทคโนโลยี</option>
      <option value="sport">กีฬา</option>
      <option value="car">ยานพาหนะ</option>
      <option value="home">บ้านและสวน</option>
      <option value="fashion">แฟชั่น</option>
      <option value="healty">สุขภาพ</option>
      <option value="games">เกมส์</option>
      <option value="music">เครื่องดนตรี</option>
    </select>
  </div>

    <div class="form-group col-12">
      <label for="headproduct">หัวข้อสินค้าที่คุณต้องการขาย</label>
      <input type="text"
        class="form-control col-6" name="headproduct" id="" aria-describedby="helpId" placeholder="" value="<?php echo $result['Product_Name']; ?>">
     
    </div>
    <div class="form-group col-6">
      <label for="inputprice">ระบุราคาสินค้าที่เหมาะสม</label>
      <input name="pdprice" type="number" min="0" step="0.01" data-number-to-fixed="2" data-number-stepfactor="100" class="currency" id="pdprice" value="<?php echo $result['Product_Price']; ?>" />
    </div>
</div>

รูปภาพสินค้า ใส่รูปได้สูงสุด 9 รูป

    
      <div class="row">
         <div class="tagclick">
          <div id="clickup1" class="clickup" style="background-image:url('product_img/<?php echo $pic[0]; ?>')"> </div>
        </div>
        <div id="remove1" class="remove"></div>
        <div class="tagclick">
          <div id="clickup2" class="clickup" style="background-image:url('product_img/<?php echo $pic[1]; ?>')"></div>
         
        </div>
        <div id="remove2" class="remove"></div>
        <div class="tagclick">
          <div id="clickup3" class="clickup" style="background-image:url('product_img/<?php echo $pic[2]; ?>')"></div>
        </div>
        <div id="remove3" class="remove"></div>
        </div>
        <div class="row">
        <div class="tagclick">
          <div id="clickup4" class="clickup" style="background-image:url('product_img/<?php echo $pic[3]; ?>')"></div>
        </div>
        <div id="remove4" class="remove"></div>
        <div class="tagclick">
          <div id="clickup5" class="clickup" style="background-image:url('product_img/<?php echo $pic[4]; ?>')"></div>
        </div>
        <div id="remove5" class="remove"></div>
        <div class="tagclick">
          <div id="clickup6" class="clickup" style="background-image:url('product_img/<?php echo $pic[5]; ?>')"></div>
        </div>
        <div id="remove6" class="remove"></div>
      </div>


      <div class="row">
        <div class="tagclick">
          <div id="clickup7" class="clickup" style="background-image:url('product_img/<?php echo $pic[6]; ?>')"></div>
         
        </div>
        <div id="remove7" class="remove"></div>
        <div class="tagclick">
          <div id="clickup8" class="clickup" style="background-image:url('product_img/<?php echo $pic[7]; ?>')"></div>
          
        </div>
        <div id="remove8" class="remove"></div>
        <div class="tagclick">
          <div id="clickup9" class="clickup" style="background-image:url('product_img/<?php echo $pic[8]; ?>')"></div>
          
        </div>
        <div id="remove9" class="remove"></div>
      </div>
    
   
    <div id="choosefile">

      <input type="file" name="picfile1" id="picfile1" style="display:none;" value="<?php echo $pic[0]; ?>">
      <input type="file" name="picfile2" id="picfile2" style="display:none;" value="<?php echo $pic[1]; ?>">
      <input type="file" name="picfile3" id="picfile3" style="display:none;" value="<?php echo $pic[2]; ?>">
      <input type="file" name="picfile4" id="picfile4" style="display:none;" value="<?php echo $pic[3]; ?>">
      <input type="file" name="picfile5" id="picfile5" style="display:none;" value="<?php echo $pic[4]; ?>">
      <input type="file" name="picfile6" id="picfile6" style="display:none;" value="<?php echo $pic[5]; ?>">
      <input type="file" name="picfile7" id="picfile7" style="display:none;" value="<?php echo $pic[6]; ?>">
      <input type="file" name="picfile8" id="picfile8" style="display:none;" value="<?php echo $pic[7]; ?>">
      <input type="file" name="picfile9" id="picfile9" style="display:none;" value="<?php echo $pic[8]; ?>">



    </div>
    
    
    <div class="form-group">
      <label for="">รายละเอียดสินค้า</label>
      <textarea class="form-control col-6" name="info_pd" id="" rows="5" ><?php echo $result['Product_info'];?></textarea>
    </div>

     <div class="form-group">
      <label for="">ระบุเบอร์โทรศัพท์</label>
      <input type="tel"
        class="form-control col-3" name="tel_phone" id="" aria-describedby="helpId" placeholder="" value="<?php echo $result['Telephone'];?>">
      
    </div>


   <?php include("connectlocate.php");
         $sql = 'SELECT name_th,id From provinces';
         $query = mysqli_query($connect,$sql);
    ?>

    <div class="form-group">
      <label for="">ระบุพื้นที่ของสินค้า</label>
      <select class="form-control col-3" name="province" id="province" >
      <?php while($result = mysqli_fetch_array($query,MYSQLI_ASSOC)){ ?>
        <option id="option" value="<?php echo $result['name_th']; ?>"><?php echo $result["name_th"];?></option>
        <?php  } ?>
      </select>
    </div>
   

        


  <?php 
  
  $sql = 'SELECT name_th,province_id From amphures ';
    $query = mysqli_query($connect,$sql); ?>
   
    <div class="form-group" id="test">
    <label for="">อำเภอ</label>
    <select class="form-control col-3" name="ampher" id="ampher">
    <?php while($result =mysqli_fetch_array($query,MYSQLI_ASSOC)){?>
    <option id=option value=<?php echo $result['name_th'];?> ><?php echo $result['name_th'];?></option>
    <?php } ?>
    
    </select>
    </div>
      
     

   
    <button type="submit" class="btn btn-success">แก้ไข</button>
    <a href="buypage.php"><button type="button" class="btn btn-success">ยกเลิก</button></a>
</div>
  </form>
 

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
    <script src="jquery.js"></script>
</body>
<?php mysqli_close($connect); ?>
</html>