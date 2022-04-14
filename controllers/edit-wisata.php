<?php

require_once('../models/config.php');

if (isset($_POST['submit'])) {
    $nama = $_POST['nama-wisata'];
    $harga = $_POST['harga-wisata'];
    $image = $_POST['image-wisata'];
    $video = $_POST['video-wisata'];
    
    $id = $_POST['id'];

    $query = "UPDATE tempat_wisata
    SET nama='$nama', harga=$harga, image='$image', video='$video' WHERE id=$id";

    if ($database->prepare($query)) {
        $result = mysqli_query($database, $query);

        if ($result) {
            header("Location: ../pages/view-data-wisata.php");
        } else {
            echo 'Data Gagal masuk ke Database';
        }
    } else {
        echo 'Gagal';
    }
}
