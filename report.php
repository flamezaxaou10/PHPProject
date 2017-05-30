<?php include 'header.php'  ?>
<script type="text/javascript">
  $(document).ready(function() {
     $('select').material_select();
   });
</script>
<div class="container">
  <div class="row">
    <form class="" action="#" method="POST">
      <h4>รายการสั่งสินค้า</h4>
      <div class="input-field col s10">
        <select class="" name="stat">
          <option value="Yes">ชำระเงินแล้ว</option>
          <option value="No">ยังไม่ได้ชำระเงิน</option>
        </select>
        <label>เลือกข้อมูลการแสดงผล</label>
      </div>
      <div class="col s2 right-align">
        <br>
        <button class="btn waves-effect waves-light #01579b light-blue darken-4 z-depth-4" type="submit" name="action">แสดงข้อมูล
                <i class="material-icons right">send</i>
        </button>
      </div>
    </form>
  </div>
  <?php if ($_POST): ?>
    <div class="row">
      <div class="col s12">
        <table>
            <thead>
              <tr>
                  <th>รหัสการสั่งซื้อ</th>
                  <th>Name</th>
                  <th>Product</th>
                  <th>Price</th>
                  <th>Address</th>
                  <th>Date</th>
                  <th>Status</th>
              </tr>
            </thead>
            <tbody>
              <?php
                $stat = $_POST['stat'];
                $sql = "SELECT * FROM report JOIN product ON product.Product_ID = report.Product_ID JOIN member ON report.Member_User = member.Member_User  WHERE Status = '$stat'";
                $result = $connect->query($sql);
                while ($row = $result->fetch_array()) {
              ?>
                  <tr>
                    <td>#<?php echo $row['Report_ID']; ?></td>
                    <td><?php echo $row['Member_Firstname']." ".$row['Member_Lastname']; ?></td>
                    <td><?php echo $row['Product_Name']; ?></td>
                    <td><?php echo $row['Report_Price']; ?></td>
                    <td><?php echo $row['Address']; ?></td>
                    <td><?php echo $row['Date']; ?></td>
                    <td><a href="paid.php?ID=<?php echo $row['Report_ID']; ?>"><?php echo $row['Status']; ?></a></td>
                  </tr>
              <?php
                }
               ?>
            </tbody>
          </table>
      </div>
  <?php endif; ?>
  </div>
</div>
<?php include 'footer.php'  ?>
