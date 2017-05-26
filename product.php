<?php include 'header.php' ?>
<br>
<?php
  $ID = $_GET['ID'];
  $sql = "SELECT * FROM product JOIN band ON product.Band_ID = band.Band_ID JOIN type ON product.Type_ID = type.Type_ID WHERE Product_ID = '$ID'";
  $result = $connect->query($sql);
  $row = $result->fetch_array();
 ?>
<div class="container">
  <div class="row">
    <div class="col s12">
      <h4><?php echo $row['Product_Name']; ?></h4>
      Type
      Band
    </div>
  </div>
  <hr>
  <div class="row">
    <div class="col s4">
      <img src="<?php echo $row['Product_IMG']; ?>" alt="" width="400px" height="400px" class="hoverable">
    </div>
    <div class="col s5">
      <p><?php echo $row['Product_Title']; ?></p>
      <hr>
      <h5>ราคา : <?php echo $row['Product_Price']; ?> บาท</h5>
      <p>
        ราคาปกติ : <strike><?php echo $row['Product_Price']*0.2 + $row['Product_Price']; ?></strike> บาท <br>
        ประหยัดททันที :  20%
      </p>
      <div class="left">
        <a class="waves-effect waves-light btn-large #1e88e5 blue darken-1"><i class="material-icons left" >shopping_cart</i>หยิบใส่ตระกร้า</a>
      </div>
    </div>
    <div class="col s3">

    </div>
  </div>
  <div class="row">
    <hr>
    <div class="col s12">
      <h5>รายละเอียดสินค้า</h5>
      <p><?php echo $row['Product_Detail']; ?></p>
    </div>
  </div>

</div>
<?php include 'footer.php'; ?>
ิ
