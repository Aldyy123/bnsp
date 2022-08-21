<?php

require_once('../models/config.php');

$no_identitas = $_POST['no-identitas'];
$nama_lengkap = $_POST['nama-lengkap'];
$phone = $_POST['phone'];
$id_tempat_wisata = $_POST['tempat-wisata'];
$tanggal_kunjungan = $_POST['date-tour'];
$pengunjung_dewasa = $_POST['adult-ps'];
$pengunjung_kecil = $_POST['child-ps'];
$total_bayar = $_POST['total-price'];

$query = "INSERT INTO pengunjung 
(no_identitas, nama_lengkap, no_hp, id_tempat_wisata, tanggal_kunjungan, p_dewasa, p_kecil, total_bayar)
VALUES
($no_identitas, '$nama_lengkap', '$phone', $id_tempat_wisata, '$tanggal_kunjungan',
$pengunjung_dewasa, $pengunjung_kecil, $total_bayar)";

// Untuk mengecek submit dan agree
if (isset($_POST['submit']) && isset($_POST['agree']) && isset($total_bayar)) {
    if (mysqli_prepare($database, $query)) {
        $result = mysqli_query($database, $query);
        if($result){
            $_SESSION['flash_message'] = "Pembelian tiket sukses";
            header('Location: ../pages/view-wisata.php');
        }
    }
}
