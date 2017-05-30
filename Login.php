<?php include 'header.php'; ?>
<div class="container center-align">
    <div class="col s12 edge">
			<h4 class="">Login</h4>
			</div>
      <div class="row center-align">
        <div class="s12">

        </div>
      </div>
      <div class="row">
        <div class="col s12 center">
          <div id="fb-root"></div>
            <div class="fb-login-button" data-max-rows="1" data-size="large" data-button-type="login_with" data-show-faces="false" data-auto-logout-link="false" data-use-continue-as="false" scope="public_profile,email"
            onlogin="checkLoginState();"></div>
            <br><br> OR <br>
        </div>
      </div>
      <form class="" action="" method="post">
        <div class="row center-align">
          <div class="row">
            <div class="col s12 ">
                <div class="col s4">

                </div>
                <div class="input-field col s4">
                  <input name="Username" type="text" class="validate">
                  <label for="Username">Username</label>
                </div>
                <div class="col s4">

                </div>
            </div>
          </div>
          <div class="row">
            <div class="col s4">

            </div>
            <div class="input-field col s4">
              <input name="Password" type="password" class="validate">
              <label for="Password">Password</label>
            </div>
          </div>
        </div>
          <div class="row">
            <div class="col s12 ">
              <div class="col s4">

              </div>
              <div class="col s4">
                <div class="col s6">
                  <button class="btn-large waves-effect waves-light #01579b light-blue darken-4 z-depth-4" type="submit" name="action">Login</button>
                </div>
                <div class="col s6">
                  <br>
                  <input type="checkbox" class="filled-in" id="filled-in-box" />
                  <label for="filled-in-box">Stay Login</label>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col s12">
              <div class="col s4">

              </div>
              <div class="input-field col s4">
                <a name="register" href="Register.php" class="wave-effect light-blue btn right darken-4" tabindex="-1">Register</a><br><br>
                <a name="forgot_password" href="#" class="wave-effect light-blue btn right grey" tabindex="-1">Forgot Password?</a>
              </div>
              <div class="col s4">

              </div>
          </div>
        </div>
      </form>
</div>
<?php include 'footer.php'; ?>
<?php
    if ($_POST) {
      $notlog = true;
      $user = $_POST['Username'];
      $pass = $_POST['Password'];
      if ($user == 'admin' && $pass == "1234") {
        $_SESSION['user'] = $user;
        $notlog = false;
        header("Location:index.php");
      }
      else {
        $sql = "SELECT * FROM Member";
        $result = $connect->query($sql);
        while ($row = $result->fetch_array()) {
          if ($user == $row['Member_User'] && $pass == $row['Member_Password']) {
            $_SESSION['username'] = $row['Member_Firstname']." ".$row['Member_Lastname'];
            $_SESSION['user'] = $row['Member_User'];
            $_SESSION['count'] = 0;
            $_SESSION['cart'] = array();
            $notlog = false;
            header("Location:index.php");
          }
        }
      }
    }
 ?>
