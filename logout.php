<?php
session_start();
session_destroy(); //menghapus sesi
$_SESSION['username'] = null;
unset($_SESSION['username']);
header('location: index.php');
?>