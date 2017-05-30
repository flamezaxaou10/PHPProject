<?php include 'header.php' ?>
<div class="container">
    <div class="row">
      <div class="col s12 center-align">
        <h4 class="black-text">สมัครสมาชิก</h4>
      </div>
    </div>
    <form class="col s12" method="post">
      <div class="row">
        <div class="input-field col s6">
          <input  name="first_name" type="text" class="validate" required>
          <label for="first_name">First Name</label>
        </div>
        <div class="input-field col s6">
          <input name="last_name" type="text" class="validate" required>
          <label for="last_name">Last Name</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input name="Username" type="text" class="validate" required>
          <label for="Username">Username</label>
        </div>
      </div>

      <div class="row">
        <div class="input-field col s12">
          <input name="password" type="password" class="validate" required>
          <label for="password">Password</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input name="Con-password" type="password" class="validate" required>
          <label for="Confirm-password">Confirm-password</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input name="email" type="email" class="validate" required>
          <label for="email">Email</label>
        </div>

      </div>
      <div class="row">
        <div class="col s12 input-field center-align">
          <input type="checkbox" class="filled-in" id="filled-in-box" />
          <label for="filled-in-box">ฉันยอมรับเงื่อนไขและสมัครด้วยตนเอง</label>
        </div>
      </div>
      <br>
      <div class="row center-align">
        <button class="btn waves-effect waves-light #01579b light-blue darken-4 z-depth-4" type="submit" name="action">Submit
                <i class="material-icons right">send</i>
        </button>
        <button class="btn waves-effect waves-light #b71c1c red darken-4 z-depth-4" type="reset" name="action">Reset
                <i class="material-icons right">settings_backup_restore</i>
        </button>
      </div>
    </form>
  </div>
  <br><br>
  <?php
      if ($_POST) {
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $Username = $_POST['Username'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $sql = "INSERT INTO member (Member_User,Member_Password,Member_Firstname,Member_Lastname,Member_Email) ";
        $sql .= "VALUES ('$Username','$password','$first_name','$last_name','$email')";
        $connect->query($sql);
        if ($connect->query($sql)) {
          echo "Error";
        }
        /*echo "<script type=\ "text/javascript\">
              alert(\ "Insert Successfully");
              </script>";*/
      }
   ?>
  <?php include 'footer.php' ?>
