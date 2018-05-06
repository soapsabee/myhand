<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
    crossorigin="anonymous">
  <link rel="stylesheet" href="index.css">
  <link rel="stylesheet" href="modal.css">
</head>

<body>
    <div class="container">
      <div class="row">
  <div class="form-group col-6">
    <label for="typeproduct" >เลือกหมวดหมู่สินค้า</label>
    <select class="form-control" name="typeproduct" id="">
      <option></option>
      <option></option>
      <option></option>
    </select>
  </div>

    <div class="form-group col-12">
      <label for="headproduct">หัวข้อสินค้าที่คุณต้องการขาย</label>
      <input type="text"
        class="form-control col-6" name="headproduct" id="" aria-describedby="helpId" placeholder="">
     
    </div>
    <div class="form-group col-6">
      <label for="inputprice">ระบุราคาสินค้าที่เหมาะสม</label>
      <input type="number" value="1000" min="0" step="0.01" data-number-to-fixed="2" data-number-stepfactor="100" class="currency" id="c1" />
    </div>
</div>

รูปภาพสินค้า ใส่รูปได้สูงสุด 9 รูป
<form action="upimage.php" method="post" enctype="multipart/form-data" id="uploadForm">
    
      <div class="row">
         <div class="tagclick">
          <div id="clickup1" class="clickup"></div>
        </div>
        <div id="remove1" class="remove"></div>
        <div class="tagclick">
          <div id="clickup2" class="clickup"></div>
         
        </div>
        <div id="remove2" class="remove"></div>
        <div class="tagclick">
          <div id="clickup3" class="clickup"></div>
        </div>
        <div id="remove3" class="remove"></div>
        </div>
        <div class="row">
        <div class="tagclick">
          <div id="clickup4" class="clickup"></div>
        </div>
        <div id="remove4" class="remove"></div>
        <div class="tagclick">
          <div id="clickup5" class="clickup"></div>
        </div>
        <div id="remove5" class="remove"></div>
        <div class="tagclick">
          <div id="clickup6" class="clickup"></div>
        </div>
        <div id="remove6" class="remove"></div>
      </div>


      <div class="row">
        <div class="tagclick">
          <div id="clickup7" class="clickup"></div>
         
        </div>
        <div id="remove7" class="remove"></div>
        <div class="tagclick">
          <div id="clickup8" class="clickup"></div>
          
        </div>
        <div id="remove8" class="remove"></div>
        <div class="tagclick">
          <div id="clickup9" class="clickup"></div>
          
        </div>
        <div id="remove9" class="remove"></div>
      </div>
    
   
    <div id="choosefile">

      <input type="file" name="picfile1" id="picfile1" style="display:none;">
      <input type="file" name="picfile2" id="picfile2" style="display:none;">
      <input type="file" name="picfile3" id="picfile3" style="display:none;">
      <input type="file" name="picfile4" id="picfile4" style="display:none;">
      <input type="file" name="picfile5" id="picfile5" style="display:none;">
      <input type="file" name="picfile6" id="picfile6" style="display:none;">
      <input type="file" name="picfile7" id="picfile7" style="display:none;">
      <input type="file" name="picfile8" id="picfile8" style="display:none;">
      <input type="file" name="picfile9" id="picfile9" style="display:none;">



    </div>
    
    
    <div class="form-group">
      <label for="">รายละเอียดสินค้า</label>
      <textarea class="form-control col-6" name="" id="" rows="5"></textarea>
    </div>

    <div class="form-group">
      <label for="">ระบุพื้นที่ของสินค้า</label>
      <select class="form-control col-3" name="" id=""data-toggle="modal" data-target="#myModal" >
        <option id="option"></option>
       
      </select>
    </div>

    <div class="form-group">
      <label for="">ระบุเบอร์โทรศัพท์</label>
      <input type="tel"
        class="form-control col-3" name="" id="" aria-describedby="helpId" placeholder="">
      
    </div>
    <button type="submit" class="btn btn-success">ลงขาย</button>
</div>
  </form>
 
  <?php include("locatemodal_page.php");
        include("locatemodal_page2.php");
  ?>
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

</html>