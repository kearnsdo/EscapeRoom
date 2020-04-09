<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
<?php include 'includes/head.php'; ?>
  <meta name="description" content="Looking for a fun activity? Are you adventurous, you have nerves of steel and a knack for solving riddles? Check out our 3 Meabhrach Escape Rooms!">
  <meta name="keywords" content="activity, fun, Meabhrach Escape Rooms, Escape Room, Dublin ">
  <meta name="author" content="Group 2">
</head>
<body>

<?php include 'includes/navbar.php'; ?>
<!--- Image Slider -->
<div id="slides" class="carousel slide" data-ride="carousel" data-interval="7000">
	<ol class="carousel-indicators">

<li data-target="#slides" data-slide-to="0"></li>
<li data-target="#slides" data-slide-to="1"></li>
<li data-target="#slides" data-slide-to="2"></li>
<li data-target="#slides" data-slide-to="3"></li>
</ol>
<div class ="carousel-inner" role="listbox"> <!--- Carousel 1 -->
	<div class="carousel-item active">
<img src="img/house.jpg" alt="Outside view of the building">
<div class="carousel-caption">
<h1 class="display-2">Meabhrach Escape Rooms</h1>
<h3>Scroll to visit our unique rooms</h3>
<!-- <button type="button" class="btn btn-outline-light btn-lg">VIEW ROOM</button> -->
<!-- <button type="button" class="btn btn-primary btn-lg">VIEW ROOM</button>  Blue button -->
<a class="btn btn-outline-light btn-lg" href="ourrooms.php" role="button">VIEW ROOM</a>
</div>
</div>
<div class="carousel-item"> <!--- Carousel 2 -->
<img src="img/mirrors.jpg" alt="A picture of a mirror">
<div class="carousel-caption">
<h1 class="display-2">Wicked Mirrors</h1>

<a class="btn btn-outline-light btn-lg" href="mirror.php" role="button">VIEW ROOM</a>
</div>
</div>
<div class="carousel-item"> <!--- Carousel 3 -->
<img src="img/mentalHospital.jpg" alt="A picture of doctors inside a mental hopsital">
<div class="carousel-caption">
<h1 class="display-2">Mental Hospital</h1>

<a class="btn btn-outline-light btn-lg" href="mental.php" role="button">VIEW ROOM</a>
</div>
</div>
<div class="carousel-item"> <!--- Carousel 4 -->
<img src="img/whiteRoom.jpg" alt="A white tunnel">
<div class="carousel-caption">
<h1 class="display-2">White Room</h1>

<a class="btn btn-outline-light btn-lg" href="white.php" role="button">VIEW ROOM</a>
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
			<img class="gif" src="img/gif/panda.gif" alt="A gif of a panda emoji" onclick="addOne();deleteClick1()" id="modal1">
</div>
<div class="col-sm-6 col-md-3">
	<img class="gif" src="img/gif/poo.gif" alt="A gif of a poo emoji" onclick="addOne();deleteClick2()" id="modal2" >
</div>
<div class="col-sm-6 col-md-3">
	<img class="gif" src="img/gif/unicorn.gif" alt="A gif of a unicorn emoji" onclick="addOne();deleteClick3()" id="modal3">
</div>
<div class="col-sm-6 col-md-3">
	<img class="gif" src="img/gif/chicken.gif" alt="A gif of a chicken emoji" onclick="addOne();deleteClick4()" id="modal4">
</div>
</div>
</div>
</div>


</body>
</html>
