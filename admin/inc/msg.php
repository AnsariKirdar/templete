<?php
$MSG = 0;
$MSG_C = "primary";
$MSG_H = "Done";
if (isset($_GET['msg'])) {
  $MSG = trim($_GET['msg']);
  if (isset($_GET['msg_c'])) {
    $MSG_C = strtolower(trim($_GET['msg_c']));
  }
  if (isset($_GET['msg_h'])) {
    $MSG_H = trim($_GET['msg_h']);
  }
  echo "
  <div class='alert alert-$MSG_C alert-dismissible fade show' role='alert'>
    <strong>$MSG_H</strong>  <hr> $MSG
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
  </div>
  ";
}
