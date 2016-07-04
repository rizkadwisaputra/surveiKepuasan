<div class="row konten">
	<div class="col-md-12 col-sm-12">
		<div id="chartContainer" style="height: 300px; width: 100%;"></div>
	</div>
</div>
<script type="text/javascript" src="<?php echo base_url() ?>assets/chart/canvasjs.min.js"></script>
<script type="text/javascript">
window.onload = function () {
	var chart = new CanvasJS.Chart("chartContainer",
	{
		title:{
			text: "Result Hari Ini?",
			fontFamily: "arial black"
		},
                animationEnabled: true,
		legend: {
			verticalAlign: "bottom",
			horizontalAlign: "center"
		},
		theme: "theme1",
		data: [
		{        
			type: "pie",
			indexLabelFontFamily: "Garamond",       
			indexLabelFontSize: 20,
			indexLabelFontWeight: "bold",
			startAngle:0,
			indexLabelFontColor: "MistyRose",       
			indexLabelLineColor: "darkgrey", 
			indexLabelPlacement: "inside", 
			toolTipContent: "{name}: {y} Manusia",
			showInLegend: true,
			indexLabel: "#percent%", 
			dataPoints: [
				{  y: <?php echo $senang; ?>, name: "Sangat Puas", legendMarkerType: "triangle"},
				{  y: <?php echo $kurang; ?>, name: "Tidak Puas", legendMarkerType: "square"},
				{  y: <?php echo $cukup; ?>, name: "Cukup Puas", legendMarkerType: "circle"}
			]
		}
		]
	});
	chart.render();
}
</script>