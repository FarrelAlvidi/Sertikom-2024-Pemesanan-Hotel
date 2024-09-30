
<?php 
session_start();

if ($_SESSION['username'] == null) {
    header("location: login.php");
    exit();
}
include "layout/layout.php"; ?>