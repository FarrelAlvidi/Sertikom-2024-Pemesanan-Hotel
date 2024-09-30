<?php 
include "header.php"

?>

<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <title>Dashboard</title>

    <style>
        * {
            font-family: "Poppins", sans-serif;
        }
    </style>
</head>
<body>

    

<div class="container mx-auto max-w-7xl px-2 sm:px-6 lg:px-8 pt-8 ">

<h1 class="text-center font-semibold text-4xl mb-5">Daftar Pengajuan Beasiswa</h1>
<hr CLASS="mb-5">
 
<table class="border-collapse border border-slate-400 mt-6 mx-auto shadow-lg">
  <thead>
    <tr>
      <th class="text-md px-6 py-3 border border-slate-300 bg-gray-100">No</th>
      <th class="text-md px-6 w-1/2 py-3 border border-slate-300 bg-gray-100">Nama</th>
      <th class="text-md px-6 py-3 border border-slate-300 bg-gray-100">Jenis Beasiswa</th>
      <th class="text-md px-6 py-3 border border-slate-300 bg-gray-100">IPK</th>

    </tr>
    
  </thead>
  <?php

        $query = "select tbl_siswa.nama, tbl_beasiswa.nama_beasiswa, tbl_daftar.ipk
        from tbl_siswa inner join tbl_daftar inner join tbl_beasiswa
        on tbl_siswa.id_siswa=tbl_daftar.id_siswa and tbl_beasiswa.id=tbl_daftar.id_beasiswa";
        //mengurutkan dari yang terbaru
        $hasil = mysqli_query($db, $query);
        $no = 1;

        foreach ($hasil as $row) {

            ?>
        <tr>
            <td class="text-md px-10 py-2 text-center border border-slate-300"><?php echo $no++;?></td>
            <td class="text-md px-24 py-2 text-center border border-slate-300"><?php echo $row['nama'];?></td>
            <td class="text-md px-14 py-2 text-center border border-slate-300"><?php echo $row['nama_beasiswa'];?></td>
            <td class="text-md px-14 py-2 text-center border border-slate-300"><?php echo $row['ipk'];?></td>

        </tr>









        <?php
        }
        ?>        

</table>
  </div>



















</body>
</html>