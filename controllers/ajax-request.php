<?php

require_once '../models/config.php';

$id = $_GET['id'];
if($id){
    $query = "SELECT * FROM tempat_wisata where id = $id";
    if($result = mysqli_query($database, $query)){
        foreach($result as $row){
            echo $row['harga'];
            
            // return json_encode($row);
        }
    }
}
