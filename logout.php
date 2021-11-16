<?php
include '/inc/config.php';
session_start();
session_destroy();
header("Location: ./index.php");
