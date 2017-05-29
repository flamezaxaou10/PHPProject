<?php
  include 'connect.php';
  $ID = $_GET['ID'];
  $sql = "DELETE FROM product WHERE Product_ID = '$ID'";
  $connect->query($sql);

  header("Location:index.php");
 ?>
