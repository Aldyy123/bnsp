<?php
require_once('../models/config.php');

$sqlPassenger = "SELECT p_dewasa, p_kecil, id_tempat_wisata FROM pengunjung";
$dataPoints = array();
$resultPassenger = mysqli_query($database, $sqlPassenger);


$sqlWisata = "SELECT nama, id FROM tempat_wisata";
$resultWisata = mysqli_query($database, $sqlWisata);

while ($rowWisata = mysqli_fetch_assoc($resultWisata)) {
	array_push($dataPoints, ['label' => $rowWisata['nama'], 'id' => $rowWisata['id'], 'y' => 0]);
}

while ($rowPassenger = mysqli_fetch_assoc($resultPassenger)) {
	foreach ($dataPoints as $key => $datapoint) {
		if ($rowPassenger['id_tempat_wisata'] === $datapoint['id']) {

			$dataPoints[$key]['y'] += $rowPassenger['p_dewasa'] + $rowPassenger['p_kecil'];
		}
	}
}
