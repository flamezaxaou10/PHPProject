<?php include 'header.php' ?>
<?php
  $Type_ID = $_GET['ID'];
  $sql = $sql = "SELECT * FROM type WHERE Type_ID = '$Type_ID'";
  $result = $connect->query($sql);
  $row = $result->fetch_array()
 ?>
<div class="container">
  <div class="row">
    <div class="col s12 center-align">
      <h4 class="truncate"><?php echo $row['Type_Name']; ?></h4>
    </div>
  </div>
  <div class="row">
<?php
  $sql = "SELECT * FROM product WHERE Type_ID = '$Type_ID'";
  $result = $connect->query($sql);
  while ($row = $result->fetch_array()) {
    $ID = $row['Product_ID'];
?>
    <a href="product.php?ID=<?php echo $row['Product_ID']; ?>">
      <div class="col s3 center">
        <div class="card hoverable ">
          <div class="card-image">
            <img src="<?php echo $row['Product_IMG']; ?>" height="250px">
            <?php if (isset($_SESSION['user']) && $_SESSION['user'] == 'admin'): ?>
              <a class="halfway-fab btn-floating btn-large right waves-effect waves-light grey" onclick="cart();" readonly><i class="material-icons left">shopping_cart</i></a>
            <?php else: ?>
              <a class="halfway-fab btn-floating btn-large right waves-effect waves-light #42a5f5 blue lighten-1 pulse"  href="cart.php?ID=<?php echo $ID; ?>" onclick="cart();"><i class="material-icons left">shopping_cart</i></a>
            <?php endif; ?>
          </div>
          <div class="card-content" style="height:150px;">
            <span class="card-title center-align"><?php echo $row['Product_Name']; ?></span>
            <p><?php echo $row['Product_Price']." ฿"; ?></p>
          </div>
      </div>
    </div>
  </a>
<?php
  }
 ?>
 </div>
</div>
<?php include 'footer.php' ?>
