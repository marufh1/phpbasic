<?php
  $db = "localhost";
  $dbusername = "root";
  $dbPassword = "";
  $dbname = "studentdb";

  $mysqli = new mysqli($db, $dbusername, $dbPassword, $dbname) or die(mysqli_error($mysqli));

  // echo "successfully created";
 ?>
