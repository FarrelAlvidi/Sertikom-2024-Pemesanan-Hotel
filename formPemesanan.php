<?php 
include "connect.php";

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $no_id = $_POST['no_id'];
    $no_hp = $_POST['no_hp'];
    $jumlahKmr = $_POST['jumlah_kamar'];
    $cekin = $_POST['cekin'];
    $cekout = $_POST['cekout'];
    $kamar = $_POST['jenis_kamar'];
    $hargaQuery = "SELECT harga from tbl_jenis_kamar where id_kamar=$kamar";
    $exc = $db->query($hargaQuery);
    $fetch = $exc->fetch_assoc();
    $harga = $fetch["harga"];

    $date1 = new datetime($cekin);
    $date2 = new datetime($cekout);
    $jarak = $date1->diff($date2);
    $selisihHari = $jarak->days;

    $totalBayar = $harga * $jumlahKmr * $selisihHari;

    $insertQuery = "INSERT INTO tbl_penyewa (id_kamar, nama, cekin, cekout, no_identitas, no_hp, jumlah, total) values 
    ('$kamar', '$nama', '$cekin', '$cekout', '$no_id', '$no_hp', '$jumlahKmr', '$totalBayar')";
    $exc = $db->query($insertQuery);

    if ($exc) {
        echo "
        <script>
        alert('Pemesanan Telah Berhasil!');
        document.location= 'penyewa.php';
        </script>";
    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Reservasi</title>
    <style>
        . {
            font-family: "Poppins", sans-serif;
        }
    </style>
</head>
<body>
    <!-- Header Section -->
        <?php include "headerHotel.html";?>
    <!-- End Header Section-->

    <div class="shadow-lg w-1/2 ml-52 mt-16 p-5 bg-slate-50">
        <h1 class="text-center font-semibold text-2xl mb-5">Booking</h1>
        <div class="grid">
            <form action="" method="post" autocomplete="off">
                <label class="font-semibold text-gray-400">Nama Lengkap</label> <br>
                <input type="text"  name="nama" class="px-4 w-full border  p-1.5 rounded-md mt-2 mb-3">
                <label class="font-semibold text-gray-400">Nomor Identitas</label> <br>
                <input type="number" name="no_id" class="px-4 w-full border p-1.5 rounded-md mt-2 mb-3">
                <label class="font-semibold text-gray-400">Nomor Handphone</label> <br>
                <input type="number" name="no_hp" class="px-4 w-full border p-1.5 rounded-md mt-2 mb-3">
                <label class="font-semibold text-gray-400">Jumlah Kamar</label> <br>
                <input type="number" name="jumlah_kamar" class="px-4 w-full border  p-1.5 rounded-md mt-2 mb-3">
                <label class="font-semibold text-gray-400">Check in</label> <br>
                <input type="date" name="cekin" class="px-4 w-full border  p-1.5 rounded-md mt-2 mb-3">
                <label class="font-semibold text-gray-400">Check out</label> <br>
                <input type="date" name="cekout" class="px-4 w-full border  p-1.5 rounded-md mt-2 mb-3  ">
                <label class="font-semibold text-gray-400">Jenis Kamar</label> <br>
                <select name="jenis_kamar" class="px-4   w-full border  p-1.5 rounded-md mt-2 mb-3  ">
                <option value="">Pilih</option>
                <?php
                $sql = "SELECT DISTINCT id_kamar, jenis_kamar from tbl_jenis_kamar";

                $kmr = $db->query($sql);

                foreach ($kmr as $kmr) {
                    echo '
                    <option value="' .$kmr['id_kamar'] .'">' .$kmr['jenis_kamar'] . '</option>';
                }
                
                ?>
                </select>
                <input type="submit" name="submit" value="Submit" class="px-4 w-full border p-2 rounded-md mt-2 mb-3 text-white font-semibold bg-indigo-600">
            </form>
        </div>
    </div>
</body>
</html>