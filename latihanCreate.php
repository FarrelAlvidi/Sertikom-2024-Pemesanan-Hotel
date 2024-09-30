<?php 
include "connect.php";


if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $no_id = $_POST['no_id'];
    $no_hp = $_POST['no_hp'];
    $jenis_kamar = $_POST['jenis_kamar'];
    $checkin = $_POST['checkin'];
    $checkout = $_POST['checkout'];
    $jumlah_kamar = $_POST['jumlah_kmr'];

    $ambilharga = "SELECT harga from tbl_jenis_kamar where id_kamar=$jenis_kamar";
    $query = $db->query($ambilharga);
    $fetch = $query->fetch_assoc();
    $harga = $fetch["harga"];

    $date1 = new datetime($checkin);
    $date2 = new datetime($checkout);
    $jarak = $date1->diff($date2);
    $interval = $jarak->days;

    $total = $harga * $jumlah_kamar * $interval;

    $sql = "INSERT INTO tbl_penyewa (id_kamar, nama, cekin, cekout, no_identitas, no_hp, jumlah, total) values ('$jenis_kamar', '$nama', '$checkin',
    '$checkout', '$no_id', '$no_hp', '$jumlah_kamar', '$total')";

    $query = $db->query($sql);


    if ($query) {
        echo "
        <script> 
        document.location= 'admin.php?page=kamaryangdipesan';</script>";
    }
}
?>
<form action="" method="post">
    <input type="text" name="nama">
    <input type="number" name="no_id">
    <input type="number" name="no_hp">
    <select class="w-full p-2 text-center appearance-none border border-gray-300 text-gray-700 rounded-sm leading-tight focus:outline-none focus:bg-white focus:border-gray-500 mt-2" name="jenis_kamar" required>
            <option selected> Pilih </option>
            <?php 
            $query = "SELECT DISTINCT jenis_kamar,id_kamar FROM tbl_jenis_kamar";
            
            $kmr = mysqli_query($db, $query);
            
            foreach ($kmr as $kmr) {
                echo '<option value="'.$kmr['id_kamar'] . '">' .$kmr['jenis_kamar'] . '</option>';
            }
            ?>
    <input type="date" name="checkin">
    <input type="date" name="checkout">
    <input type="text" name="jumlah_kmr">
    <input type="submit" name="submit">
</form>