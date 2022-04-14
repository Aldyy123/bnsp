<?php

require_once '../models/config.php';

$id = $_GET['id'];
if($id){
    $query = "SELECT * FROM tempat_wisata where id = $id";
    $result = mysqli_query($database, $query);
}else{
    header("Location: ../pages/data-view.php");
}
