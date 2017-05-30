<?php include 'header.php'; ?>
<div class="container">
  <div class="row bordered">
    <div class="col s12 center">
      <h4>สินค้าของฉัน</h4><br>
      <?php
          $ID = $_SESSION['user'];
          $sql = "SELECT * FROM report JOIN product ON report.Product_ID = product.Product_ID WHERE Member_User = '$ID'";
          $result = $connect->query($sql);
          $i = 1;
          while ($row = $result->fetch_array()){
       ?>
            <div class="row center">
              <div class="col s2">
                <h6>รหัสการสั่งซื้อ#<?php echo $row['Report_ID']; ?></h6>
              </div>
              <div class="col s1">
                <h6>วันที่ซื้อ : <?php echo $row['Date']; ?></h6>
              </div>
              <div class="col s3">
                <img src="<?php echo $row['Product_IMG']; ?>" alt="" height="80px">
              </div>
              <div class="col s2">
                <p><?php echo $row['Product_Name'] ?></p>
              </div>
              <div class="col s2">
                <p><?php echo $row['Product_Price'] ?> บาท</p>
              </div>
              <div class="col s2">
                <?php if ($row['Status'] == "No"): ?>
                  <h6 class="red-text">สถาณะ : ยังไม่ได้ชำระเงิน</h6> 
                <?php else: ?>
                  <h6>สถาณะ : จ่ายเงินแล้ว</h6>
                <?php endif; ?>

              </div>
            </div>

            <hr>
       <?php
          }
        ?>
    </div>
  </div>
</div>
<?php include 'footer.php'; ?>
