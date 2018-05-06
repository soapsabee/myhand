้<html>
    <?php include("connectlocate.php");
         $sql = 'SELECT name_th,id From provinces';
         $query = mysqli_query($connect,$sql);
    ?>
<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Modal Heading</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
          <?php while($result = mysqli_fetch_array($query,MYSQLI_ASSOC)){ ?>
         <a href="#" data-toggle="modal" data-dismiss="modal" data-province="<?php echo $result["id"];?>" class="test"><div class="province"><?php echo $result["name_th"]; ?></div>
            
         
         <?php  } ?>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
</html>