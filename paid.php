<?php include 'header.php' ?>
<?php
    $ID = $_GET['ID'];
    $sql = "UPDATE report SET Status = 'Yes' WHERE Report_ID = '$ID'";
    $connect->query($sql);
    header("Location:report.php");
 ?>
