<?php
session_start();
setcookie('user', 1, time() - 1, "./*"); // for users
setcookie('id', 1, time() - 1, "./*");   // for users
unset($_SESSION['login']);  // for admins
header('Location: ./index.php'); ?>