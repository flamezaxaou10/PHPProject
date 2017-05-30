<?php include 'header.php'; ?>
<div class="container">
  <form class="" action="#" method="post">
    <div class="row">
      <div class="col s7">
        <hr>
        <b>กรุณาเลือกที่อยู่จัดส่ง</b>
        <hr>
        <div class="row">
          <div class="col s12">
            <div class="row">
              <div class="col s12">
                <div class="card white hoverable">
                  <div class="card-content black-text">
                    <span class="card-title">ที่อยู่</span>
                    <?php
                        $ID = $_GET['ID'];
                        $sql = "SELECT * FROM address WHERE Member_User = '$ID'";
                        $result = $connect->query($sql);
                        $result = $connect->query($sql);
                        $i = 1;
                        while ($row = $result->fetch_array()){

                    ?>
                          <p>
                            <input type="checkbox" class="filled-in" id="filled-in-box" checked="checked" name ="Add" value="<?php echo  $i." : ".$row['Add_M']." ".$row['Add_T']." ".$row['Add_S']." ".$row['Add_C']." ".$row['Add_Z'];?>"/>
                            <label for="filled-in-box" class="black-text"> ที่อยู่ที <?php echo  $i." : ".$row['Add_M']." ".$row['Add_T']." ".$row['Add_S']." ".$row['Add_C']." ".$row['Add_Z'];?></label>
                          </p> <br>
                    <?php
                          $i++;
                        }
                     ?>
                </div>
              </div>
            </div>
        </div>
          </div>
        </div>
      </div>
      <div class="col s5">
        <hr>
        <b>สรุปการสั่งซื้อ</b>
        <hr>
        <div class="col s7">
          สินค้า <hr>

          <?php
              for ($i = 1 ; $i <= $_SESSION['count'] ; $i++) {
                $PID = $_SESSION['cart'][$i];
                $sql = "SELECT * FROM product WHERE Product_ID = '$PID'";
                $result = $connect->query($sql);
                $row = $result->fetch_array();
                echo $row['Product_Name'];
                echo "<br>";
              }
           ?>
        </div>
        <div class="col s2">
          จำนวน <hr>
          <?php
              for ($i = 1 ; $i <= $_SESSION['count'] ; $i++) {
                echo "1";
                echo "<br>";
              }
           ?>
        </div>
        <div class="col s3">
          ราคา <hr>
          <?php
              for ($i = 1 ; $i <= $_SESSION['count'] ; $i++) {
                $PID = $_SESSION['cart'][$i];
                $sql = "SELECT * FROM product WHERE Product_ID = '$PID'";
                $result = $connect->query($sql);
                $row = $result->fetch_array();
                echo $row['Product_Price'];
                echo "<br>";
              }
           ?>
        </div>
        <div class="row">
          <div class="col s12">
            <hr>
            <div class="col s6">
              <h5>รวมมูลค่าสุทธิ :</h5>
            </div>
            <div class="col s6 right-align">
              <?php
                $Price = 0;
                for ($i = 1 ; $i <= $_SESSION['count'] ; $i++) {
                  $PID = $_SESSION['cart'][$i];
                  $sql = "SELECT * FROM product WHERE Product_ID = '$PID'";
                  $result = $connect->query($sql);
                  $row = $result->fetch_array();
                  $Price += $row['Product_Price'];
                }
               ?>
              <h5><?php echo $Price; ?> บาท</h5>
              <br>
            </div>
            <hr>
            <div class="col s12 center">
              <img src="img/kum.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col s12 center">
        <br>
        <button class="btn-large waves-effect waves-light #01579b light-blue darken-4 z-depth-4" type="submit" name="action" style="width : 300px;" >ชำระเงินค่าสินค้า
                <i class="material-icons left">receipt</i>
        </button>
      </div>
    </div>
    <div class="row">
      <div class="col s12 center">
        <?php if ($_POST): ?>
          <a class="modal-trigger waves-effect waves-light btn" href="#modal1">วิธีการชำระเงิน</a>
        <?php endif; ?>
      </div>
    </div>
  </form>
</div>
<?php include 'footer.php'; ?>
<?php
  if ($_POST) {
    $Add = $_POST['Add'];
    for ($i = 1 ; $i <= $_SESSION['count'] ; $i++) {
      $PID = $_SESSION['cart'][$i];
      $sql = "SELECT * FROM product WHERE Product_ID = '$PID'";
      $result = $connect->query($sql);
      $row = $result->fetch_array();
      $Report_Price = $row['Product_Price'];
      $QTY = $row['Product_QTY'];
      $Date = date("Y-m-d h:i:sa");
      $sqlin = "INSERT INTO report (Member_User,Product_ID,Report_Price,Address,Date,Status) VALUES ('$ID','$PID','$Report_Price','$Add','$Date','no')";
      $resultin = $connect->query($sqlin);
      $QTY -= 1;
      $update = "UPDATE product SET Product_QTY = '$QTY' WHERE Product_ID = '$PID'";
      $connect->query($update);
    }
?>
    <script type="text/javascript">
      Materialize.toast('ทำรายการสำเร็จ!', 4000)
    </script>
    <!-- Modal Structure -->
    <div id="modal1" class="modal modal-fixed-footer">
      <div class="modal-content">
        <h4>การชำระเงิน</h4>
        <p>A bunch of text</p>
      </div>
      <div class="modal-footer">
        <a href="#" class="modal-action modal-close waves-effect waves-green btn-flat ">Agree</a>
      </div>
    </div>
    <script type="text/javascript">
      $(document).ready(function(){
        // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
        $('.modal').modal();
      });
    </script>
<?php
    unset($_SESSION["cart"]);
    unset($_SESSION["count"]);
    $_SESSION["count"]=0;
  }
 ?>
