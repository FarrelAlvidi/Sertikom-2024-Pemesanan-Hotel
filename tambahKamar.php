<?php 
include "connect.php";

if (isset($_POST['tambah'])) {
    $jeniskmr = $_POST['jenis_kamar'];
    $harga = $_POST['harga'];
    $keterangan = $_POST['keterangan'];

    $sql = "INSERT INTO tbl_jenis_kamar (jenis_kamar, harga, keterangan) values ('$jeniskmr', '$harga' , '$keterangan')";

    $hasil = $db->query($sql);
    
    if ($hasil) {
        echo "<script>
        alert('Tambah Data Admin Berhasil!');
        document.location='admin.php?page=jeniskamar';</script>";
        
    }
}

?>


<div class="container px-6 mx-auto grid">
    <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800 mt-20">
    <form action="" method="POST" autocomplete="off">
        <h4 class="text-gray-700 dark:text-gray-400 text-center font-semibold text-xl">Tambah Data Pesanan</h4>
        <label class="block mt-4 text-sm">
        <span class="text-gray-700 dark:text-gray-400">
            Jenis Kamar
        </span>
        <input type="text" placeholder="Jenis Kamar" name="jenis_kamar" class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input"">
        </label>
        <label class="block mt-4 text-sm">
        <span class="text-gray-700 dark:text-gray-400">
            Harga
        </span>
        <input type="number" placeholder="Harga" name="harga" class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input"">
        </label>
        <label class="block mt-4 text-sm">
        <span class="text-gray-700 dark:text-gray-400">
            Keterangan
        </span>
        <input type="text" placeholder="Keterangan" name="keterangan" class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input"">
        </label>

        <input type="submit" name="tambah" class="block w-full mt-1 text-md font-semibold dark:text-white  dark:border-gray-600  bg-purple-600 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input mt-10">
</form>
        
    </div>
</div>








