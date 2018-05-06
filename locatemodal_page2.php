้<html>
    <?php 
      
       if(isset($_POST['province'])){ 
       $cookie = $_POST['province'];
       }
       else{
         $cookie = '0';
       }
         $sql2 = 'SELECT name_th,province_id From amphures WHERE province_id = "'.$cookie.'"';
         $query = mysqli_query($connect,$sql2);
      
         if(!$query){
           echo "notok";
         }
         else{
           echo "OK";
         }
    ?>
<!-- The Modal -->
<div class="modal" id="myModal2">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">ฟหกฟหก</h4>
        <button type="button" class="close" >&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
          <?php while($result = mysqli_fetch_array($query,MYSQLI_ASSOC)){ ?>
       <a href="#"><div class="armpher" ><?php echo $result["name_th"]; echo $cookie;?></div></a>
          <?php  } ?>
      </div>
            <?php echo "OK555"; ?>
      <!-- Modal footer -->
      <div class="modal-footer">
        <button id="clsmodal2" type="button" class="btn btn-danger" >Close</button>
      </div>

    </div>
  </div>
</div>
</html>