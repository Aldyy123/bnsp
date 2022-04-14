<?php
require_once('../models/config.php');

$queryPengunjung = "SELECT * FROM pengunjung";
$resultPengunjung = mysqli_query($database, $queryPengunjung);

$dewasa = 0;
$anak = 0;
$dataPoints = [];

while ($rowPengunjung = mysqli_fetch_array($resultPengunjung)) {
	$id_wisata = $rowPengunjung['id_tempat_wisata'];
	$queryWisata = "SELECT * FROM tempat_wisata WHERE id=$id_wisata";
    $resultWisata = mysqli_query($database, $queryWisata);
	while ($rowWisata = mysqli_fetch_array($resultWisata)){
		if($id_wisata === $rowWisata['id']){
			$dewasa += intval($rowPengunjung['p_dewasa']);
			$anak += intval($rowPengunjung['p_kecil']);
			$label = $rowWisata['nama'];

			// $dataPoints = array_push($dataPoints,
			// array(
			// 	$dataPoints['label'] => $label, 'y' => $anak + $dewasa
			// )
			// );
		}
	}
}
// $dataPoints = array(
// 	array("label"=> $label, "y"=> $anak + $dewasa),
// );
var_dump($dataPoints);

die();


