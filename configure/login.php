<?php
include '../database/db.php';

session_start();

if (isset($_POST['username'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  $query = "SELECT * FROM user WHERE `username` = '$username' AND `password` = '$password'";

  if (mysqli_query($connection, $query)) {
    $_SESSION["username"] = $username;
    header('location:../index.php');
  } else {
    header('location:../login.php');
  }
}
