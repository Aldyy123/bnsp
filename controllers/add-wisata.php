<?php

include_once('../models/config.php');


$image = $_POST['image-wisata'];
$nama = $_POST['nama-wisata'];
$video = $_POST['video-wisata'];
$harga = $_POST['harga-wisata'];

if (isset($_POST['submit'])) {
    $query = "INSERT INTO tempat_wisata (nama, harga, image, video)
    VALUES ('$nama', '$harga', '$image', '$video');";

    if(mysqli_prepare($database, $query)) {
        $result = mysqli_query($database, $query);
        if($result) {
            header("Location: ../pages/view-data-wisata.php");
        }
    }
}