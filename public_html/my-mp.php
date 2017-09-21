<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Who's my MP</title>
		<!-- Google fonts-->
		<link href="https://fonts.googleapis.com/css?family=Lato:400,400i,700,900|Zilla+Slab:400,500,500i,600,700" rel="stylesheet">
		<!-- Custom CSS -->
		<link rel="stylesheet" href="css/mp.css">
		<link rel="stylesheet" href="css/header.css">
		<link rel="stylesheet" href="css/footer.css">
		<!-- Bootstrap CSS-->
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/bootstrap-grid.css">
		<link rel="stylesheet" href="css/bootstrap-reboot.css">
		<!-- Bootstrap JS-->
		<link rel="stylesheet" href="js/bootstrap.js">
		<link rel="stylesheet" href="js/main.js">	
	</head>

	<?php include 'partials/header_2.php' ?>

	<body>
		<div class="row">
			<div class="offset-xs-1 col-xs-11">
				<h1 class="title">Who's My MP</h1>
			</div>
		</div>
		<div class="container">
  <div class="row">
    <!-- <div class="col align-self-start">
      One of three columns
    </div> -->
    <div class="col align-self-center">
      One of three columns
    </div>
    <div class="col align-self-end">
      One of three columns
    </div>
  </div>
</div>
		<div class="container">
			<div class="row">
				<div class="col align-self-center">
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
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col align-self-center">
					<p class="text">Click on the map and see your Member of Parlement</p>
				</div>
			</div>
		</div>
		

		<?php include 'partials/footer.php' ?>	

		<!--Modal Box-->
		<div class="row">
			<div class="">
				<h1 class="title-modal">Current MP in</h1>				
			</div>
			<div class="">
				<select name="parties" id="parties">
					<option value="all parties">All Parties</option>
					<option value="Lireral">Lireral</option>
					<option value="NDP">NDP</option>
					<option value="Conservative">Conservative</option>
					<option value="Green">Green</option>
				</select>			
			</div>			
		</div>
	</body>
</html>
