<?php include 'header.php' ?>
<br>
<?php
  $ID = $_GET['ID'];
  $sql = "SELECT * FROM product JOIN band ON product.Band_ID = band.Band_ID JOIN type ON product.Type_ID = type.Type_ID WHERE Product_ID = '$ID'";
  $result = $connect->query($sql);
 ?>
<div class="container">
  <div class="row">
    <div class="col s12">
      <h5>ชื่อสินค้า</h5>
      ประเภท <br>
      band
    </div>
  </div>
  <div class="row">
    <div class="col s4">
      <img src="" alt="">
    </div>
    <div class="col s5">
      details
      Price : 5000
    </div>
    <div class="col s3">

    </div>
  </div>

</div>
<?php include 'footer.php'; ?>
ิ
