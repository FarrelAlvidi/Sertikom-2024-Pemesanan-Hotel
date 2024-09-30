<?php 
include "connect.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $delete = "DELETE FROM tbl_jenis_kamar where id_kamar=$id";

    $hasil = $db->query($delete);

    if ($hasil) {
        echo "<script>
        alert('Hapus Data Berhasil!');
        document.location='admin.php?page=jeniskamar';
        </script>
        ";
    }
}

?>