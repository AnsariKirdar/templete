<?php
if (!isset($_POST['contactSubmit'])) {
  header("Location: ./../../Login.php?MSG=Invalid Try to Login&MSG_C=danger&MSG_H=Invalid Acess");
} else {
  include './../conn.php';
  $firstname = $_POST['first_name'];
  $lastname = $_POST['last_name'];
  $email = $_POST['email_address'];
  $phone = $_POST['phone'];
  $message = $_POST['message'];
  $sql = "INSERT INTO contact_us (`firstName`,`lastName`, `email`, `phone`, `message`, `c_date`,`e_date`) VALUES ('$firstname','$lastname', '$email', '$phone', '$message',current_time(),current_time())";
  $result = mysqli_query($conn, $sql);
  if ($result) {
    header("Location: ./../../contact.php?MSG=Contact Us Message Send Successful&MSG_C=success&MSG_H=Contact Us Successful");
  } else {
    header("Location: ./../../contact.php?MSG=Contact Us Message Send  Failed&MSG_C=danger&MSG_H=Contact Us Failed");
  }
}