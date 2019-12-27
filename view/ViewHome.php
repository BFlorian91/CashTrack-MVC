<?php

		class ViewHome extends View
		{
				public function __construct()
				{
						
				}

				public function bodyPage()
				{ ?>
					<div class="row justify-content-between">
							<a class="btn btn-info rounded" style="width: 200px" href="index.php?page=addmoney" role="button">Add money</a>
							<a class="btn btn-info rounded" style="width: 200px" href="index.php?page=addspent" role="button">Spent money</a>
							<a class="btn btn-info rounded" style="width: 200px" href="index.php?page=chart" role="button">Chart</a>
					</div>
					<?php
				}
		}