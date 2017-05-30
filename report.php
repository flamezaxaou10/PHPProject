<?php include 'header.php'  ?>
<script type="text/javascript">
  $(document).ready(function() {
     $('select').material_select();
   });
</script>
<div class="container">
  <div class="row">
    <form class="" action="index.html" method="post">
      <h4>รายการสั่งสินค้า</h4>
      <div class="input-field col s10">
        <select class="" name="stat">
          <option value="yes">ชำระเงินแล้ว</option>
          <option value="no">ยังไม่ได้ชำระเงิน</option>
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
  <div class="row">
    <div class="col s12">
      <table>
          <thead>
            <tr>
                <th>Username</th>
                <th>Product</th>
                <th>QTY</th>
                <th>Price</th>
                <th>Address</th>
                <th>Date</th>
                <th>Status</th>
            </tr>
          </thead>
          <tbody>
            <?php
              $sql = "SELECT * FROM report ORDER BY Date DESC"
             ?>

          </tbody>
        </table>
    </div>
  </div>
</div>
<?php include 'footer.php'  ?>
