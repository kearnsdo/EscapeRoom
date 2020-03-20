<!-- Navigation -->
<nav class="navbar navbar-light bg-light sticky-top">
	<script>
	$(document).ready(function () {

  $('.first-button').on('click', function () {

    $('.animated-icon1').toggleClass('open');
  });
});
</script>
<div class="container-fluid">
<a class="navbar-brand" href="index.php"><img src="img/logo.png"></a>  <!-- Logo -->
<!-- Collapse button -->
<button class="navbar-toggler first-button" type="button" data-toggle="collapse" data-target="#navbarSupportedContent20"
  aria-controls="navbarSupportedContent20" aria-expanded="false" aria-label="Toggle navigation">
  <div class="animated-icon1"><span></span><span></span><span></span></div>
</button>

<!-- Collapsible content -->
<div class="collapse navbar-collapse" id="navbarSupportedContent20">

  <!-- Links -->
  <ul class="navbar-nav mr-auto">
    <li class="nav-item active">
      <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="ourrooms.php">Our Rooms</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="booking.php">Booking</a>
    </li>
	</li>
	<li class="nav-item">
		<a class="nav-link" href="faq.php">FAQ</a>
	</li>
</li>
<li class="nav-item">
	<a class="nav-link" href="howtogethere.php">How to Get There</a>
</li>
  </ul>
  <!-- Links -->

</div>
<!-- Collapsible content -->

</nav>
<!--/.Navbar-->
