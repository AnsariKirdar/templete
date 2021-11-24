<?php
if (!isset($_POST['LoginSubmit'])) {
  header("Location: ./../../Login.php?MSG=Invalid Try to Login&MSG_C=danger&MSG_H=Invalid Acess");
} else {
  include dirname(__FILE__) . '/../conn.php';
  $username = $_POST['username'];
  $password = ENC($_POST['password']);
  $sql = "SELECT * FROM `users` WHERE `username` = '$username' AND `password` = '$password'";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);
  if ($row['username'] == $username && $row['password'] == $password) {
    if ($row['stauts'] == 1) {
      $_SESSION['username'] = $username;
      $_SESSION['password'] = $password;
      $_SESSION['name'] = $row['name'];
      $_SESSION['id'] = $row['id'];
      header("Location: ./../../admin/index.php?MSG=Login Successful&MSG_C=success&MSG_H=Login Successful");
    } else {
      header("Location: ./../../Login.php?MSG=Invalid Try to Login&MSG_C=danger&MSG_H=Invalid Acess");
    }
  } else {
    header("Location: ./../../Login.php?MSG=Invalid Try to Login&MSG_C=danger&MSG_H=Invalid Acess");
  }
}