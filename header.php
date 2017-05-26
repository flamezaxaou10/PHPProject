<!DOCTYPE html>
<html>
<head>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

      <title>COM-OUT.COM</title>
</head>
<body>
    <?php include 'connect.php'; ?>
      <?php if (isset($_SESSION['username'])) : ?>
        <nav>
          <div class="nav-wrapper #01579b light-blue darken-4">
            <a href="index.php" class="brand-logo"><img src="img/logo1.png" alt="" style="width:60%;"></a>
              <ul id="nav-mobile" class="right">
              <li><a href="#"><i class ="medium material-icons">shopping_cart</i></a></li>
              <li><a href="#"><i class ="medium material-icons">payment</i></a></li>
              <li><a href="Login.php">Login </a></li>
            </ul>
          </div>
        </nav>
        <?php if ($_SESSION['username'] == "admin"): ?>
          <nav>
            <div class="nav-wrapper #01579b light-blue darken-4">
              <a href="index.php" class="brand-logo"><img src="img/logo1.png" alt="" style="width:60%;"></a>
              <ul id="nav-mobile" class="right">
                <li><a href="addproduct.php" class="waves-effect waves-light btn-large #1e88e5 blue darken-1"><i class="material-icons left">input</i>Add Product</a></li>
                <li>Administrator</li>
                <li><a href="Logout.php">Logout</a></li>
              </ul>
            </div>
          </nav>

        <?php endif; ?>
      <?php endif; ?>
    <br>
    <div class="container">
      <div class="row">
        <div class="col s12">
          <nav>
            <div class="nav-wrapper #01579b light-blue darken-4">
              <form>
                <div class="input-field">
                  <input id="search" type="search" required>
                  <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                  <i class="material-icons">close</i>
                </div>
              </form>
            </div>
          </nav>
        </div>
      </div>
    </div>







    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>

  </body>
</html>
