<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'includes/head.php'; ?>
</head>
<body>

<?php $page = 'ourrooms.php'; include 'includes/navbar.php'; ?>




<!--- Welcome Section -->
<div class="container-fluid padding">
	<div class="row welcome text-center">
<div class="col-12">
	<h1 class="display-4">Our Rooms</h1>
</div>
<hr>
<div class="col-12">
	<p class="lead">Welcome to our escape rooms. We have 3 rooms on offer.</p>
	</div>
</div>
<!--- Three Column Section -->
<div class="container-fluid padding">
	<div class="row text-center padding">
<div class="col-xs-12 col-sm-6 col-md-4">
	<i class="fa fa-window-restore"></i>
	<h3>Mirror Room</h3>
	<p>This is escape room 1</p>
</div>
<div class="col-xs-12 col-sm-6 col-md-4">
	<i class="fa fa-plus"></i>
	<h3>Mental Hospital</h3>
	<p>This is escape room 2</p>
</div>
<div class="col-sm-12 col-md-4">
	<i class="fa fa-circle-thin"></i>
	<h3>White Room</h3>
	<p>This is escape room 3</p>
</div>
</div>
<hr class="my-4">
</div>

<!--- Meet the team -->
<div class="container-fluid padding">
	<div class="row welcome text-center">
<div class="col-12">
	<h1 class="display-4">Explore the rooms</h1>
</div>
<hr>
</div>
</div>

<!--- Cards -->
<div class="container-fluid padding">
	<div class="row padding">
		<div class="col-md-4">
<div class"card">
	<img class="card-img-top" src="img/mirrors2.jpg">
	<div class="card-body">
		<h4 class="card-title">Mirror Room</h4>
		<p class="card-text">Escape room 1</p>
		<a href="#" class="btn btn-outline-secondary">See Room</a>
		</div>
	</div>
</div>

<div class="col-md-4">
<div class"card">
<img class="card-img-top" src="img/mentalHospital2.jpg">
<div class="card-body">
<h4 class="card-title">Mental Room</h4>
<p class="card-text">Escape room 2</p>
<a href="#" class="btn btn-outline-secondary">See Room</a>
</div>
</div>
</div>

<div class="col-md-4">
<div class"card">
<img class="card-img-top" src="img/whiteRoom2.jpg">
<div class="card-body">
<h4 class="card-title">White Room</h4>
<p class="card-text">Escape room 3</p>
<a href="#" class="btn btn-outline-secondary">See Room</a>
</div>
</div>
</div>

</div>
<hr class="my-4">  <!--- TCreates the long line -->
</div>

<?php include 'includes/footer.php' ?>

</body>
</html>
