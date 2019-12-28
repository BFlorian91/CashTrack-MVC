<?php

	class ViewChart extends View
	{
		public function __construct()
		{
			
		}

		public function bodyPage()
		{ ?>
			<canvas id="chart" width="400" height="200"></canvas>
			<script>
				const ctx = document.getElementById('chart').getContext('2d');
				const chart = new Chart(ctx, {
				type: 'line',
				data: {
					labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
					datasets: [{
						label: 'Spent',
						data: ["220", 150, 450],
						backgroundColor: [
							'rgba(54, 162, 235, 0.2)',
							'rgba(255, 206, 86, 0.2)',
							'rgba(75, 192, 192, 0.2)',
							'rgba(153, 102, 255, 0.2)',
							'rgba(255, 159, 64, 0.2)'
						],
						borderColor: [
							'rgba(54, 162, 235, 1)',
							'rgba(255, 206, 86, 1)',
							'rgba(75, 192, 192, 1)',
							'rgba(153, 102, 255, 1)',
							'rgba(255, 159, 64, 1)'
						],
						borderWidth: 2
					}]
				},
				options: {
					scales: {
						yAxes: [{
							ticks: {
								beginAtZero: true
							}
						}]
					}
				}
			});
			</script>
		  <?php
		}
	}