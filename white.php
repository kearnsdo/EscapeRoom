<!DOCTYPE html>
<html>
  <head>
    <title>White Room</title>
	<?php include 'includes/head.php'; ?>
      <meta name="description" content="Everything white. Will you be able to uncover the colours of the White Room?">
      <meta name="keywords" content="activity, fun, Meabhrach Escape Rooms, Escape Room, Dublin, White Room ">
      <meta name="author" content="Group 2">

   <link href='https://fonts.googleapis.com/css?family=Quicksand:400,700|Quattrocento+Sans:400,700|Palanquin:400,600|Raleway|Josefin+Sans' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
<!-- Navigation -->
<?php $page = 'ourrooms.php'; include 'includes/navbar.php'; ?>

    <div class="first-content">
      <div class="pic" style="background: url(img/whiteRoom2.jpg);">
        <div class="overlay"></div>
        <div class="content">
          <h3>The White Room</h3>
        </div>
      </div>
    </div>
    <div class="descrip">
      <div class="container">
        <h1> About </h1>
		<center><img src="img/white.png" alt="white"></center>
		<div class="row">
			<div class="col-md col-sm-4 col-xs-12">
        <h3>People: 2-5</h3>
		</div>
		<div class="col-md col-sm-4 col-xs-12">
		<h3>Difficulty: 3/5</h3>
		</div>
		<div class="col-md col-sm-4 col-xs-12">
		<h3>Level of Fear: 2/5
		</h3>
		</div>
		</div>
        <p>Aw, have you been feeling down lately? One bad day after another? No worries then, pay a visit to the White Room, and you’ll see for yourself how many refined colours it will bring into your life.<br><br>
The White Room represents everything that is in its name: every single object inside is white, but with the progression of the game a player will notice the colours change. If the players successfully finished the first two rooms before, in this one they will uncover something else beyond the bright appeal of the White Room.



        </p>
      <div class="btn-book">
    <center>  <a class="btn btn-primary btn-lg" href="calendar3.php" role="button">Book Now</a></center>
	  </div>
	  <div class="second-section">
	    <div class="filters">
	      <ul id="filters">
	       <center> <h2>More pictures</h2></centner>
	      </ul>
	    </div>
	  </div>
	  <div class="row masonry">
	    <div class="col-md col-sm-6 col-xs-12 selector col-sm-6 col-xs-12 selector photography">
	      <div class="item">
	        <img src="img/whiteRoom1.jpg" alt="Image of a person in a white room">
	      </div>
	    </div>
	    <div class="col-md-6  col-sm-6 col-xs-12 selector photography">
	      <div class="item">
	        <img src="img/whiteRoom3.jpg" alt="Image of the white room interior">
	      </div>
	    </div>
	  </div>
      </div>
    </div>
    <div class="comment">
      <div class="container">
        <div class="items">
          <h3> 2 Comments</h3>
          <p>Join the discussion and tell us your opinion.</p>
        </div>
        <div class="row">
          <div class="col-md-2">
            <div class="picture">
              <img src="img/portret22.png" alt="User icon">
            </div>
          </div>
          <div class="col-md-10">
          <div class="txt">
            <h5>Seamus</h5>
            <span>Friday at 01:00 PM</span>
            <p>Omg that was amazing. 10/10</p>
            </div>
          </div>
        </div>
         <div class="row items4">
          <div class="col-md-2">
            <div class="picture">
              <img src="img/portreti23.png" alt="User icon">
            </div>
          </div>
          <div class="col-md-10">
          <div class="txt">
            <h5>Violetta</h5>
            <span>Monday at 10:00 AM</span>
            <p>Never have been scared as much in my life</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="contact-content">
      <div class="container">
      <h5 class="item">Leave a review</h5>
          <form class="row" action="#">
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <input placeholder="Name" type="text" name="firstname"> <br>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <input placeholder="Email" type="text" name="email"> <br>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <input placeholder="Subject" type="text" name="subject"> <br>
                            </div>
                            <div class="col-md-12 form-area">
                                <textarea placeholder="Message" name="message"></textarea>
                                <input type="submit" onclick="comment()" value="Comment">
								<script>
									function comment(){
										alert("Your comment has been submitted!");
									}
								</script>
                            </div>
                 </form>
      </div>
    </div>
  </body>
</html>
