<?php 
include "connect.php";
session_start();

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $username = $_POST['username'];
    $nama = $_POST['nama'];
    $password = $_POST['password'];

    $edit = "UPDATE tbl_admin SET username = '$username', nama = '$nama', password = '$password' where id_admin=$id";

    $hasil = $db->query($edit);

    if ($hasil) {
        echo "<script>
        alert('Data Berhasil Di Edit');
        document.location='admin.php?page=dashboard';
        </script>";
    } else {
        echo "<script>
        alert('Data Gagal Di Edit, Silahkan Coba Lagi');
        document.location='admin.php?page=dasboard&id=$id';
        </script>";
    }
} 

?>