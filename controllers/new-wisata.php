<?php

require_once '../models/config.php';

if (isset($_POST['submit'])) {
    $menu = $_POST['menu'];
    $harga = $_POST['harga'];
    $query = "INSERT INTO menu (menu, harga)
    VALUES ('$menu', $harga)";

    if ($database->prepare($query)) {
        $result = mysqli_query($database, $query);

        if ($result === true) {
            header("Location: ../pages/data-view.php");
        } else {
            echo 'Data Gagal masuk ke Database';
        }
    } else {
        echo 'Gagal';
    }
}
