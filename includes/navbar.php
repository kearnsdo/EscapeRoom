<!-- Navigation -->
<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
<div class="container-fluid">
<a class="navbar-brand" href="index.php"><img src="img/logo.png"></a>  <!-- Logo -->
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"><!-- burger style button -->
<span class="navbar-toggler-icon"></span> <!-- Draws navbar icon in the middle -->
</button>
<div class="collapse navbar-collapse" id="navbarResponsive">
<ul class="navbar-nav ml-auto"> <!-- Pushes menu to the right hand side -->
	<li class="nav-item"> <!-- Makes active menu darker  than the rest -->
		<a class="nav-link" <?php if($page='ourrooms.php'){echo 'active';}?> href="ourrooms.php">Our Rooms</a>
	</li>
	<li class="nav-item">
		<a class="nav-link" href="booking.php">Booking</a>
	</li>
	<li class="nav-item">
		<a class="nav-link" href="faq.php">FAQ</a>
	</li>
	<li class="nav-item">
		<a class="nav-link" href="howtogethere.php">How to get here</a>
	</li>
</div>
</div>
</nav>
