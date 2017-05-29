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
      <b><?php echo $row['Type_Name']; ?> </b><br>
      <?php echo $row['Band_Name']; ?>
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
        ประหยัดททันที :  20% <br>
        จำนวนสินค้า : <?php echo $row['Product_QTY']; ?>
      </p>
      <div class="left">
        <a class="waves-effect waves-light btn-large #1e88e5 blue darken-1"  onclick="cart();" href="cart.php?ID=<?php echo $ID; ?>"><i class="material-icons left" >shopping_cart</i>หยิบใส่ตระกร้า</a>
      </div>
    </div>
    <div class="col s3">
      <?php if ($_SESSION['user'] == 'admin'): ?>
        <div class="row">
          <div class="left col s12">
            <a class="waves-effect waves-light btn-large #e53935 red darken-1" href="deleteproduct.php?ID=<?php echo $ID; ?>"><i class="material-icons left" >delete</i>ลบข้อมูล</a>
          </div>
        </div>
        <div class="row">
          <div class="left col s12">
            <a class="waves-effect waves-light btn-large #90caf9 blue lighten-3" href="editproduct.php?ID=<?php echo $ID; ?>"><i class="material-icons left">mode_edit</i>แก้ไปข้อมูลสินค้า</a>
          </div>
        </div>
      <?php endif; ?>
      <img src="img/pool.jpg" alt="">
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
