<?php
$MSG = 0;
$MSG_C = "primary";
$MSG_H = "Done";
if (isset($_GET['MSG'])) {
  $MSG = trim($_GET['MSG']);
  if (isset($_GET['MSG_C'])) {
    $MSG_C = strtolower(trim($_GET['MSG_C']));
  }
  if (isset($_GET['MSG_H'])) {
    $MSG_H = trim($_GET['MSG_H']);
  }
  echo "
  <div class='alert alert-$MSG_C alert-dismissible fade show' role='alert'>
    <strong>$MSG_H</strong>  <hr> $MSG
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
  </div>
  ";
}
