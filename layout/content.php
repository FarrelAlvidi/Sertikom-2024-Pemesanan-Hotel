<?php 
if(isset($_GET['page'])){
    switch ($_GET['page']) {
        case 'dashboard':
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                include "editAdmin.php";
            } elseif (isset($_GET['aksi']) && $_GET['aksi'] == 'tambah') {
                include 'tambahAdmin.php';
            } 
            else {
                include 'dashboard.php';
            }
        
            break;

        case 'pemesanan':
            include 'hasilPenyewa.php';
            break;
        case 'jeniskamar':
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                include "editKamar.php";
            } elseif(isset($_GET['aksi']) && $_GET['aksi'] == 'tambah') {
                include 'tambahkamar.php';
            }
            else{
                include 'jeniskamar.php';
            }
        
            break;
        case 'kamaryangdipesan':
            if (isset($_GET['aksi']) && $_GET['aksi'] == 'tambah') {
            include 'tambahpesanan.php';
            } else
            include 'pesanankamar.php';
            break;
        default:
            include 'layout/404.html';
            break;
    }
}else{
    header('location: login.php');
}



?>