<?php
    ob_start();
    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "phpproject";

    $connect = new mysqli ($host,$user,$password,$db);
    $connect->set_charset("utf8");

    if (!$connect) {
      echo "Not Connect";
    }
 ?>
