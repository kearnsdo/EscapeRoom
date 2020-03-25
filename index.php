<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'includes/head.php'; ?>
</head>
<body>
<!--- TEST Slider -->


<?php include 'includes/navbar.php'; ?>
<!--- Image Slider -->
<div id="slides" class="carousel slide" data-ride="carousel" data-interval="7000">
	<ol class="carousel-indicators">
	<ul class="carousel-indicators">
<li data-target="#slides" data-slide-to="0" class="active"></li>
<li data-target="#slides" data-slide-to="1"></li>
<li data-target="#slides" data-slide-to="2"></li>
<li data-target="#slides" data-slide-to="3"></li>
</ul></ol>
<div class ="carousel-inner" role="listbox"> <!--- Carousel 1 -->
	<div class="carousel-item active">
<img src="img/house.jpg">
<div class="carousel-caption">
<h1 class="display-2">Meabhrach Escape Rooms</h1>
<h3>Scroll to visit our unique rooms</h3>
<button type="button" class="btn btn-outline-light btn-lg">VIEW ROOM</button> <!--- See through button-->
<!-- <button type="button" class="btn btn-primary btn-lg">VIEW ROOM</button>  Blue button -->

</div>
</div>
<div class="carousel-item"> <!--- Carousel 2 -->
<img src="img/mirrors.jpg">
<div class="carousel-caption">
<h1 class="display-2">Mirror Room</h1>

<button type="button" class="btn btn-outline-light btn-lg">VIEW ROOM</button>
</div>
</div>
<div class="carousel-item"> <!--- Carousel 3 -->
<img src="img/mentalHospital.jpg">
<div class="carousel-caption">
<h1 class="display-2">Mental Hospital</h1>

<button type="button" class="btn btn-outline-light btn-lg">VIEW ROOM</button>
</div>
</div>
<div class="carousel-item"> <!--- Carousel 4 -->
<img src="img/whiteRoom.jpg">
<div class="carousel-caption">
<h1 class="display-2">White Room</h1>

<button type="button" class="btn btn-outline-light btn-lg">VIEW ROOM</button>
</div>
</div>
	</div>
	</div>

<!--- Arrow buttons -->
<a class="carousel-control-prev" href="#slides" role="button" data-slide="prev">
	<span class="carousel-control-prev-icon" aria-hidden="true"></span>
</a>

<a class="carousel-control-next" href="#slides" role="button" data-slide="next">
	<span class="carousel-control-next-icon" aria-hidden="true"></span>
</a>





<!--- Two Column Section -->

<!-- <hr class="my-4"> -->
<!--- Fixed background -->
 <!-- <figure>
	<div class="fixed-wrap">
		<div id="fixed">
		</div>
	</figure> -->

<!--- Emoji Section -->
<button class="fun" data-toggle="collapse" data-target="#emoji">Click for fun!</button>
<div id="emoji" class="collapse">
<div class="container-fluid padding">
	<div class="row text-center">
		<div class="col-sm-6 col-md-3">
			<img class="gif" src="img/gif/panda.gif">
</div>
<div class="col-sm-6 col-md-3">
	<img class="gif" src="img/gif/poo.gif">
</div>
<div class="col-sm-6 col-md-3">
	<img class="gif" src="img/gif/unicorn.gif">
</div>
<div class="col-sm-6 col-md-3">
	<img class="gif" src="img/gif/chicken.gif">
</div>
</div>
</div>
</div>




<!--- Connect -->
<!-- <div class="container-fluid padding">
	<div class="row text-center padding">
		<div class="col-12">
			<h2>Connect</h2>
		</div>
<div class="col-12 social padding">
	<a href="facebook.com/example/"><i class="fab fa-facebook"></i></a>
			<a href="facebook.com/example/"><i class="fab fa-twitter"></i></a>
							<a href="facebook.com/example/"><i class="fab fa-instagram"></i></a>
									<a href="facebook.com/example/"><i class="fab fa-youtube"></i></a>
	</div>
</div>
</div> -->

</body>
</html>
