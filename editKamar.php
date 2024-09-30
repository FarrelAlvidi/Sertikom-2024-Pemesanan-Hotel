<?php 
include "connect.php";


$id = $_GET['id'];

$sql = "SELECT * from tbl_jenis_kamar where id_kamar=$id";

$hasil = $db->query($sql);

$data = mysqli_fetch_assoc($hasil);

?>

<div class="container px-6 mx-auto grid">
    <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800 mt-20">
    <form action="prosesEditKamar.php" method="POST" autocomplete="off">
    <input type="hidden" name="id" value="<?= $data['id_kamar']?>">
        <h4 class="text-gray-700 dark:text-gray-400 text-center font-semibold text-xl">Tambah Data Pesanan</h4>
        <label class="block mt-4 text-sm">
        <span class="text-gray-700 dark:text-gray-400">
            Jenis Kamar
        </span>
        <input type="text" placeholder="Jenis Kamar" name="jenis_kamar" value="<?= $data['jenis_kamar']?>" class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input"">
        </label>
        <label class="block mt-4 text-sm">
        <span class="text-gray-700 dark:text-gray-400">
            Harga
        </span>
        <input type="number" placeholder="Harga" name="harga" value="<?= $data['harga']?>" class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input"">
        </label>
        <label class="block mt-4 text-sm">
        <span class="text-gray-700 dark:text-gray-400">
            Keterangan
        </span>
        <input type="text" placeholder="Keterangan" name="keterangan" value="<?= $data['keterangan']?>" class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input"">
        </label>

        <input type="submit" name="submit" class="block w-full mt-1 text-md font-semibold dark:text-white  dark:border-gray-600  bg-purple-600 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input mt-10">
</form>
        
    </div>
</div>



    <div class="mt-32 w-1/2 h-96 shadow-2xl p-5 bg-slate-100">
            <h1 class="font-semibold text-lg ml-10 mt-10">Edit Kamar</h1>
        <form action="prosesEditKamar.php" method="POST">


            <input type="text" placeholder="Jenis Kamar" name="jenis_kamar" class="" > <br>
            <input type="number" placeholder="Harga" name="harga" class="mt-5"  > <br>
            <input type="text" placeholder="Keterangan" name="keterangan" class="mt-5" ><br>
            <input type="submit" name="edit">
        </form>

    </div>

