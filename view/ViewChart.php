<?php

class ViewChart extends View
{
	public function __construct()
	{ }

	public function bodyPage()
	{ ?>
		<canvas id="chart" width="400" height="200"></canvas>
		<script>
			$.ajax({
				url: "http://localhost:8000/model/ActionGetData.php",
				method: "GET",
				dataType: "json",
				success: (datasFetch) => {
					const spent = []
					const axis = []
					const category = []

					for (i in datasFetch) {
						spent.push(datasFetch[i].spent)
						axis.push(datasFetch[i].date)
						category.push(datasFetch[i].nameOfSpent)
					}

					const ctx = document.getElementById('chart').getContext('2d')
					const chart = new Chart(ctx, {
						type: 'line',
						data: {
							labels: axis,
							datasets: [{
								label: 'Florian',
								data: spent,
								backgroundColor: [
									'rgba(54, 162, 235, 0.2)',
								],
								borderColor: [
									'rgba(54, 162, 235, 1)',
									'rgba(54, 162, 235, 1)',
									'rgba(54, 162, 235, 1)',
									'rgba(54, 162, 235, 1)',
									'rgba(54, 162, 235, 1)',
									'rgba(54, 162, 235, 1)',
									'rgba(54, 162, 235, 1)',
								],
								borderWidth: 2
							}]
						},
						options: {
							tooltips: {
								callbacks: {
									label: function(tooltipItems, data) {
										return tooltipItems.yLabel.toString() + " €";
									}
								}
							},
							scales: {
								xAxes: [{
									gridLines: {
										color: "rgba(0, 0, 0, 0)",
									}
								}],
								yAxes: [{
									gridLines: {
										color: "rgba(0, 0, 0, 0)",
									},
									ticks: {
										beginAtZero: true
									}
								}]
							}
						}
					});
					console.log(datasFetch)
				},
				error: (datas) => {
					console.log("ERROR " + datas)
				}
			})
		</script>
<?php
	}
}
