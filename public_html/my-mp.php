<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Who's my MP</title>
		<!-- Google fonts-->
		<link href="https://fonts.googleapis.com/css?family=Lato:400,400i,700,900|Zilla+Slab:400,500,500i,600,700" rel="stylesheet">
		<!-- CSS -->
		<link rel="stylesheet" href="css/mp.css">
		<link rel="stylesheet" href="css/header.css">
		<link rel="stylesheet" href="css/footer.css">
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/bootstrap-grid.css">
		<link rel="stylesheet" href="css/bootstrap-reboot.css">
	</head>

	<body>
		<?php include 'partials/header_2.php' ?>
		
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
						<option value="Nova Scoria">Nova Scoria</option>
						<option value="Saskatchewan">Saskatchewan</option>
						<option value="Newfoundland and Labrador">Newfoundland and Labrador</option>
						<option value="Manitoba">Manitoba</option>
						<option value="New Brunswick">New Brunswick</option>
						<option value="Prince Edward Island">Prince Edward Island</option>
					</select>
				</div>	
				<div class="d-flex justify-content-center">	
					<p class="text">Click on the map and see your Member of Parlement</p>
				</div>
			</div>

			<?php include 'partials/map.html' ?>

			<div class='mp-con col-xs-6 col-md-3'>
				<div class="d-flex justify-content-between">
					<h4 class='name'>Name</h4>
					<img src="img/logo/liberal_2.svg" class='party-logo'>
				</div>
				<div id="bg-red" class='line'></div>
				<p id=" + partyCol + " class='party-name'>party-name</p>
				<p>something</p>
			</div>

		</div>
		<!-- End of container-fluid -->

		<?php include 'partials/footer.php' ?>
			

		<!--Modal Box-->

		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#mp-modal">
		  Launch demo modal
		</button>

		<!-- Modal -->
		<div class="modal fade" id="mp-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		        ...
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		        <button type="button" class="btn btn-primary">Save changes</button>
		      </div>
		    </div>
		  </div>
		</div>


		<div class="container-fluid" id="test" data-party="page">
			<div class="title-modal-con">
				<h1 class="title-modal">Current MP in</h1>				
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

			<div id="display-info" class="row">
			</div>

		</div>
		<!-- End of container-fluid -->
			<!-- JS -->
		
		<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>	
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
		<script src="js/bootstrap.js"></script>
		<script src="js/xml.js"</script>
		<script src="js/mp.js"></script>
	</body>
</html>
