<?php
include '../database/db.php';
// session dimulai
session_start();

if (isset($_POST['username'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  // mencari data dengan username dan password yang cocok pada tabel user
  $query = "SELECT * FROM user WHERE `username` = '$username' AND `password` = '$password'";

  if (mysqli_query($connection, $query)) {
    // menyimpan session dengan nama username
    $_SESSION["username"] = $username;
    header('location:../index.php');
  } else {
    header('location:../login.php');
  }
}
