<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Who's my MP</title>
		<!-- Google fonts-->
		<link href="https://fonts.googleapis.com/css?family=Lato|Zilla+Slab|Zilla+Slab+Highlight" rel="stylesheet">
		<!-- Custom CSS -->
		<link rel="stylesheet" href="css/mp.css">
		<!-- Bootstrap CSS-->
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/bootstrap-grid.css">
	</head>
	<body>
		<div class="row">
			<div class="col-xs-12">
				<h1 class="title">Who's My MP</h1>
			</div>
		</div>
		
		<div class="row">
			<div class="col-xs-12 col-md-4 offset-md-4">
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
				<p class="text">Click on the map and see your Member of Parlement</p>
			</div>
		</div>		

		<!--Modal Box-->
		<div class="row">
			<div class="col-xs-12 col-md-4 offset-md-4">
				<h1 class="title-modal">Current MP in</h1>				
			</div>
			<div class="offset-md-4 col-md-4">
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
