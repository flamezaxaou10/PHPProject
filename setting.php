<?php include 'header.php'; ?>
<div class="container">
  <div class="row">
    <div class="col s12">
      <h5 class="center">ตั้งค่าบัญชี</h5>
    </div>
    <div class="row">
      <div class="col s3">
        <ul class="collection with-header">
         <li class="collection-header"><h5>ตั้งค่า</h5></li>
         <li class="collection-item"><a href="?Acc=1">บัญชี</a></li>
         <li class="collection-item"><a href="?Acc=2">ที่อยู่</a></li>
         <li class="collection-item"><a href="?Acc=3">เปลี่ยนรหัสผ่าน</a></li>
        </ul>
      </div>
      <?php if (isset($_GET['Acc'])): ?>
        <?php if ($_GET['Acc'] == '1'): ?>
          <div class="col s9">
            <?php
                $username = $_SESSION['user'];
                $sql = "SELECT * FROM member WHERE Member_User = '$username'";
                $result = $connect->query($sql);
                $row = $result->fetch_array();
             ?>
            <div class="row">
              <div class="col s12 center">
                <form class="" action="?Acc=1" method="post">
                  <div class="row">
                    <div class="input-field col s6">
                      <input  name="User" type="text" class="validate" value=<?php echo $row['Member_User']; ?> readonly>
                      <label for="first_name">Username</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s6">
                      <input  name="first_name" type="text" class="validate" required value=<?php echo $row['Member_Firstname']; ?>>
                      <label for="first_name">First Name</label>
                    </div>
                    <div class="input-field col s6">
                      <input name="last_name" type="text" class="validate" required value=<?php echo $row['Member_Lastname']; ?>>
                      <label for="last_name">Last Name</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s12">
                      <input name="email" type="email" class="validate" required value=<?php echo $row['Member_Email']; ?>>
                      <label for="email">Email</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col s12 center-align">
                      <button class="btn waves-effect waves-light #01579b light-blue darken-4 z-depth-4" type="submit" name="action">Save
                              <i class="material-icons right">mode_edit</i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        <?php elseif ($_GET['Acc'] == '2'): ?>
          <div class="col s9">
            <div class="row">
              <div class="col s12">
                <h6>ที่อยู่ทั้งหมด</h6>
                <?php
                    $username = $_SESSION['user'];
                    $sql = "SELECT * FROM address WHERE Member_User = '$username'";
                    $result = $connect->query($sql);
                    $i = 1;
                    while ($row = $result->fetch_array()){
                ?>
                      <p> ที่อยู่ที <?php echo $i." : ".$row['Add_M']." ".$row['Add_T']." ".$row['Add_S']." ".$row['Add_C']." ".$row['Add_Z']; ?></p> <br>
                <?php
                      $i++;
                    }
                 ?>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col s12">
                <p class="center-align">เพิ่มที่อยู่</p>
                <form class="" action="?Acc=2" method="post">
                  <div class="row">
                    <div class="input-field col s6">
                      <input  name="Add_M" type="text" class="validate" required>
                      <label for="Add_M">บ้านเลขที หมู่บ้าน</label>
                    </div>
                    <div class="input-field col s6">
                      <input name="Add_T" type="text" class="validate" required>
                      <label for="Add_T">ตำบล</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s6">
                      <input name="Add_S" type="email" class="validate" required>
                      <label for="Add_S">อำเภอ</label>
                    </div>
                    <div class="input-field col s6">
                      <input name="Add_C" type="email" class="validate" required>
                      <label for="Add_C">จังหวัด</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s6">
                      <input name="Add_Z" type="email" class="validate" required>
                      <label for="Add_Z">รหัสไปรษณีย์</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col s12 center-align">
                      <button class="btn waves-effect waves-light #01579b light-blue darken-4 z-depth-4" type="submit" name="action">เพิ่มที่อยู่
                              <i class="material-icons right">library_add</i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </div>


          </div>
        <?php endif; ?>
      <?php endif; ?>
    </div>
  </div>
</div>
<?php include 'footer.php'; ?>

<?php if ($_POST) {
    if ($_GET['Acc'] == '1') {

    }
    elseif ($_GET['Acc'] == '2') {

    }
} ?>
