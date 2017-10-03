<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Who's my MP</title>
		<!-- Google fonts-->
		<link href="https://fonts.googleapis.com/css?family=Lato:400,400i,700,900|Zilla+Slab:400,500,500i,600,700" rel="stylesheet">
		<!-- CSS -->

		<link rel="stylesheet" href="css/header.css">
		<link rel="stylesheet" href="css/footer.css">
		<link rel="stylesheet" href="css/mp.css">
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/bootstrap-grid.css">
		<link rel="stylesheet" href="css/bootstrap-reboot.css">
		<!-- Google Icon  -->
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	</head>

	<body>
		<?php include "partials/header_2.php";  ?>
		<div class="container-fluid container-fluid--mp">

			<h1 class="title">Who's My MP</h1>

			<div class="mp-select">
				<div class="d-flex justify-content-center">
					<h1 class="sec-title">Select Your</h1>
					<select name="province" id="province">
						<option value="Province">Province</option>
						<option value="Ontario">Ontario</option>
						<option value="British Columbia">British Columbia</option>
						<option value="Quebec">Quebec</option>
						<option value="Alberta">Alberta</option>
						<option value="Nova Scotia">Nova Scotia</option>
						<option value="Saskatchewan">Saskatchewan</option>
						<option value="Newfoundland and Labrador">Newfoundland and Labrador</option>
						<option value="Manitoba">Manitoba</option>
						<option value="Nunavat">Nunavat</option>
						<option value="New Brunswick">New Brunswick</option>
						<option value="Nothwest territories">Nothwest territories</option>
						<option value="Prince Edward Island">Prince Edward Island</option>
						<option value="Yukon">Yukon</option>
					</select>
				</div>
				<div class="d-flex justify-content-center">
					<p class="text">Click on the map and see your Member of Parlement</p>
				</div>
			</div>
			<div class="map-con" onmouseover="showTooltip()" onmouseout="hideTooltip()">
				<?php include 'partials/svg.php' ?>
			</div>

		</div>
		<!-- End of container-fluid -->

		<?php /*include 'partials/footer.php'*/ ?>

		<div class="container-fluid container-fluid--mp" id="tooltip">

			<!-- When hover over on the map show this box -->
			<div class="mp-num-con" >
				<ul class="list-unstyled">
					<div class="d-flex justify-content-center align-items-center">
						<li id="prov-name" class="mp-num-prov">Province</li>
					</div>
					<li class="d-flex justify-content-between">
						<img class="mp-num-img" src="img/logo/liberal_logo.svg" alt="Liberal's Logo">
						<p id="lib-num" class="num red">1</p>
					</li>
					<li class="d-flex justify-content-between">
						<img class="mp-num-img" src="img/logo/ndp_logo.svg" alt="NDP's Logo">
						<p id="ndp-num" class="num orange">2</p>
					</li>
					<li class="d-flex justify-content-between">
						<img class="mp-num-img con-img" src="img/logo/conservative_logo.png" alt="Conservative's Logo">
						<p id="con-num" class="num blue">3</p>
					</li>
					<li class="d-flex justify-content-between">
						<img class="mp-num-img" src="img/logo/green_logo.svg" alt="Green Logo">
						<p id="green-num" class="num green">4</p>
					</li>
				</ul>
			</div>

			<!--Modal Box // Eventually take off this modal button-->

        </div>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#mp-modal">
			  Launch demo modal
        </button>
			<!-- Modal -->
			<div class="modal fade" id="mp-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="exampleModalLabel"></h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
			        </button>
		      	</div>
		      	<div class="modal-body">
		        	<div class="container-fluid" id="test" data-party="page">
								<div class="title-modal-con">
									<h1 class="title-modal">Current MP in <span>Province</span></h1>
									<div class="modal-select">
										<select name="parties" id="parties">
											<option value="all parties">All Parties</option>
											<option value="Liberal">Liberal</option>
											<option value="NDP">NDP</option>
											<option value="Conservative">Conservative</option>
											<option value="Green Party">Green Party</option>
										</select>
									</div>
								</div>
							<div id="display-info" class="row"></div>
			    	</div>
				</div>
			</div>

		    </div>
        </div>
		<!-- End of container-fluid -->

		<?php include 'partials/footer_innerpage.php';?>
		<!-- JS -->
		<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
		<script src="js/bootstrap.js"></script>
		<script src="js/xml.js"></script>
		<script src="js/mp.js"></script>
		<script src="js/main.js"></script>
		<script>

        </script>
	</body>
</html>
