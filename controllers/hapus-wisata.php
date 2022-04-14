<?php

require_once '../models/config.php';

$id = $_GET['id'];
if($id){
    $query = "DELETE FROM tempat_wisata WHERE id=$id";
    $result = mysqli_query($database, $query);
    if($result){
        header("Location: ../pages/view-data-wisata.php");
    }
}

