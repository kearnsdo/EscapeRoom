<!DOCTYPE html>
<html lang="en">
<head>
    <title>Our Rooms</title>
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
  <a href="mirror.php">  <span id="edit-img" class="img-span pull-right"><img src="img/icon_crazy.png" alt="mirror room icon, link"></span></a>
	<h3>Wicked Mirrors</h3>
	<p>Discover what stands behind the cold reflective surface.</p>
</div>
<div class="col-xs-12 col-sm-6 col-md-4">
  <a href="mental.php"> <span id="edit-img" class="img-span pull-right"><img src="img/icon_scary.png" alt="mental room icon, link"></span></a>
	<h3>Mental Hospital</h3>
	<p>Unveil the dark secrets of the mental hospital and get out alive.</p>
</div>
<div class="col-sm-12 col-md-4">
  <a href="white.php"><span id="edit-img" class="img-span pull-right"><img src="img/icon_actor.png" alt="white room icon, link"></span></a>
	<h3>White Room</h3>
	<p>Enjoy your trip to the world of colours and nothingness.</p>
</div>
</div>
<hr class="my-4">
</div>

<style> #edit-img:hover img {
     -webkit-filter: invert(100%);
 }
</style>

</body>
</html>
