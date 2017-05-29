<?php include 'header.php'; ?>
<?php
  $ID = $_GET['ID'];
  ++$_SESSION['count'];
  $_SESSION['cart'][$_SESSION['count']] = $ID;
  header("Location:product.php?ID=$ID");

 ?>
