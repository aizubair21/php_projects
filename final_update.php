<?php
include("connection.php");

  $name = $_GET["first_name"];
  $phone = $_GET["number"];
  $email = $_GET["u_email"];
  $id = $_GET["slId"];
  echo'<br>';
  echo "$name. $phone .$email";
  $update_user = "UPDATE user_info
  SET name = '$name', phone = '$phone', email = '$email' WHERE id=$id";



 if (mysqli_query($conn_to_db, $update_user)) {
  echo "done ";
  header("location:index.php");
  } else {
    echo "have an error" .mysqli_error($conn_to_db);
  }
