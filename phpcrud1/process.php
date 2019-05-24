<?php
  session_start();

  include 'configdB.php';

  if (isset($_POST['save'])) {
    $firstname = $_POST['fname'];
    $lastname = $_POST['lname'];
    $schname = $_POST['schoolname'];
    $passyear = $_POST['passingyear'];
    $mysqli->query("INSERT INTO tb_information (fname, lname, scname, passyear)
    VALUES ('$firstname', '$lastname', '$schname', '$passyear')") or die($mysqli->error());

    $_SESSION['msg'] = "Insert data successfully done";
    $_SESSION['msg-type'] = "success";


     header("location:index.php");
    // echo "successfull";
  }

 ?>
