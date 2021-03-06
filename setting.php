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
      <?php $username = $_SESSION['user']; ?>
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
                      <label for="User">Username</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s6">
                      <input  name="Firstname" type="text" class="validate" required value=<?php echo $row['Member_Firstname']; ?>>
                      <label for="first_name">First Name</label>
                    </div>
                    <div class="input-field col s6">
                      <input name="Lastname" type="text" class="validate" required value=<?php echo $row['Member_Lastname']; ?>>
                      <label for="Lastname">Last Name</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s12">
                      <input name="Email" type="email" class="validate" required value=<?php echo $row['Member_Email']; ?>>
                      <label for="Email">Email</label>
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
                      <input name="Add_S" type="text" class="validate" required>
                      <label for="Add_S">อำเภอ</label>
                    </div>
                    <div class="input-field col s6">
                      <input name="Add_C" type="text" class="validate" required>
                      <label for="Add_C">จังหวัด</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s6">
                      <input name="Add_Z" type="text" class="validate" required>
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
          <?php elseif ($_GET['Acc'] == '3'): ?>
            <div class="row">
              <form class="" action="?Acc=3" method="post">
                <div class="col s8">
                  <div class="row">
                    <div class="input-field col s9">
                      <input name="password" type="password" class="validate" required>
                      <label for="password">Current Password</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s9">
                      <input name="newpassword" type="password" class="validate" required>
                      <label for="newpassword">New Password</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s9">
                      <input name="conpassword" type="password" class="validate" required>
                      <label for="Confirm-password">Confirm-password</label>
                    </div>
                  </div>
                  <div class="col s12 center-align">
                    <button class="btn waves-effect waves-light #01579b light-blue darken-4 z-depth-4" type="submit" name="action">เปลี่ยนพาสเวิร์ด
                            <i class="material-icons right">save</i>
                    </button>
                  </div>
                </div>
              </form>
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
      $username = $_POST['User'];
      $Firstname = $_POST['Firstname'];
      $Lastname = $_POST['Lastname'];
      $Email = $_POST['Email'];
      $sql = "UPDATE member SET Member_Firstname = '$Firstname',
                                Member_Lastname = '$Lastname',
                                Member_Email = '$Email'
                                WHERE Member_User = '$username'";
      $connect->query($sql);
      header("Location:setting.php?Acc=1");
    }
    elseif ($_GET['Acc'] == '2') {
      $Add_M = $_POST['Add_M'];
      $Add_T = $_POST['Add_T'];
      $Add_S = $_POST['Add_S'];
      $Add_C = $_POST['Add_C'];
      $Add_Z = $_POST['Add_Z'];
      $sql = "INSERT INTO address (Member_User,Add_M,Add_T,Add_S,Add_C,Add_Z) VALUES ('$username','$Add_M','$Add_T','$Add_S','$Add_C','$Add_Z')";
      $connect->query($sql);
      header("Location:setting.php?Acc=2");
    }
    elseif ($_GET['Acc'] == '3') {
      $cpassword = $_POST['password'];
      $newpassword = $_POST['newpassword'];
      $conpassword = $_POST['conpassword'];
      if ($newpassword == $conpassword) {
        $sql = "UPDATE member SET Member_Password = '$newpassword' WHERE Member_User = '$username'";
        $connect->query($sql);
      }
      else {
        echo "<script type=\"text/javascript\">
                Materialize.toast('รหัสผ่านไม่ตรงกัน!', 4000)
              </script>";
      }

    }
} ?>
 <?php if ($_POST && ($_GET['Acc'] == '1' || $_GET['Acc'] == '2')): ?>
   <script type="text/javascript">
     Materialize.toast('ทำรายการสำเร็จ!', 4000)
   </script>
 <?php endif; ?>
