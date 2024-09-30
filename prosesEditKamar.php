<?php 
include "connect.php";
session_start();

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $jeniskmr = $_POST['jenis_kamar'];
    $harga = $_POST['harga'];
    $keterangan = $_POST['keterangan'];

    $edit = "UPDATE tbl_jenis_kamar SET jenis_kamar = '$jeniskmr', harga = '$harga', keterangan = '$keterangan' where id_kamar=$id";

    $hasil = $db->query($edit);

    if ($hasil) {
        echo "<script>
        alert('Data Berhasil Di Edit');
        document.location='admin.php?page=jeniskamar';
        </script>";
    } else {
        echo "<script>
        alert('Data Gagal Di Edit, Silahkan Coba Lagi');
        document.location='admin.php?page=jeniskamar&id=$id';
        </script>";
    }
} 

?>