<?php
session_start();
unset($_SESSION['user_name']);
unset($_SESSION['user_email']);

session_destroy();

echo "<script>window.location.href='index.php';</script>";
?>


