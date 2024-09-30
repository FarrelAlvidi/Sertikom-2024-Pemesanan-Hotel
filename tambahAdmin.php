<?php 
include "connect.php";

if (isset($_POST['tambah'])) {
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "INSERT INTO tbl_admin (username, nama, password) values ('$username', '$nama' , '$password')";

    $hasil = $db->query($sql);
    
    if ($hasil) {
        echo "<script>
        alert('Tambah Data Admin Berhasil!');
        document.location='admin.php?page=dashboard';</script>";
        
    } else {
        echo "<script>
        alert('data gagal');
        document.location='admin.php?page=dashboard';</script>";
    }
}

?>

<div class="container px-6 mx-auto grid">
    <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800 mt-20">
    <form action="" method="POST" autocomplete="off">
        <h4 class="text-gray-700 dark:text-gray-400 text-center font-semibold text-xl">Tambah Data Admin</h4>
        <label class="block mt-4 text-sm">
        <span class="text-gray-700 dark:text-gray-400">
            Nama
        </span>
        <input type="text" placeholder="Nama" name="nama" class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input"">
        </label>
        <label class="block mt-4 text-sm">
        <span class="text-gray-700 dark:text-gray-400">
            Username
        </span>
        <input type="text" placeholder="Username" name="username" class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input"">
        </label>
        <label class="block mt-4 text-sm">
        <span class="text-gray-700 dark:text-gray-400">
            Password
        </span>
        <input type="password" placeholder="Password" name="password" class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input"">
        </label>

        <input type="submit" name="tambah" class="block w-full mt-1 text-md font-semibold dark:text-white  dark:border-gray-600  bg-purple-600 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input mt-10">
    </form>   
    </div>
</div>







