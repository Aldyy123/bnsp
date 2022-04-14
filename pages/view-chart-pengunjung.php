<?php
require_once('../controllers/logical-chart.php');


$title = "Chart Pengunjung";
include "../header.php"
?>

<div class="container">
    <div id="chartContainer" style="height: 370px; width: 100%;"></div>
</div>

<script>
window.onload = function () {
 console.log(<?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>);
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	exportEnabled: true,
	theme: "light1", // "light1", "light2", "dark1", "dark2"
	title:{
		text: "Data Chart pengunjung Wisata"
	},
	axisY:{
		includeZero: true
	},
	data: [{
		type: "column",
		indexLabelFontColor: "#5A5757",
		indexLabelPlacement: "outside",   
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>

<?php
include "../footer.php"
?>