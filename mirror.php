<!DOCTYPE html>
<html>
  <head>
    <title>Wicked Mirrors</title>
	<?php include 'includes/head.php'; ?>
   <link href='https://fonts.googleapis.com/css?family=Quicksand:400,700|Quattrocento+Sans:400,700|Palanquin:400,600|Raleway|Josefin+Sans' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
<!-- Navigation -->
<?php $page = 'ourrooms.php'; include 'includes/navbar.php'; ?>

    <div class="first-content">
      <div class="pic" style="background: url(img/mirrorRoom1.png);">
        <div class="overlay"></div>
        <div class="content">
          <h3>Wicked Mirrors</h3>
        </div>
      </div>
    </div>
    <div class="descrip">
      <div class="container">
        <h1> About </h1>
		<center><img src="img/icon_group.png" alt="mirror"></center>
		<div class="row">
			<div class="col-md col-sm-4 col-xs-12">

        <h3>People: 3-6</h3>
		</div>
		<div class="col-md col-sm-4 col-xs-12">
		<h3>Difficulty: 2/5</h3>
		</div>
		<div class="col-md col-sm-4 col-xs-12">

		<h3>Level of Fear: 4/5
		</h3>
		</div>

		</div>
        <p> Grandma always told you: dark creatures can sneak into our reality through the mirrors, once the path is opened. When you were a child, it terrified you. Old woman was probably going mad the last years of her life, but you saw fear in her pale eyes, and it followed you everywhere. You remember waking up, trembling from another nightmare that came upon you that night. You remember closing your eyes as tightly as you could when you went by mirrors in the house. However, once grandma passed away, you started to forget your fear. It weakened, but you still shiver at the blink of a smooth reflective surface.
 <br><br>Yet still, you are here. You came once she called you, out of respect for your old friendship, of course. Is it another ridiculous idea of hers, or is she really onto something?.. <br><br>
Wicked Mirrors primarily is a horror riddle game which includes elements of detective story. A group of players will find themselves in a secret abandoned laboratory, where a scientist was researching mirrors and their effect on human beings. With the progression of the quest, the intensity of the story rises, so in advance players chose the level of fear they can handle.



        </p>
      <div class="btn-book">
     <center>  <a class="btn btn-primary btn-lg" href="calendar1.php" role="button">Book Now</a></center>
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
	        <img src="img/mirrors.jpg" alt="Image of a window">
	        <div class="overlay">
	          <div class="overlay-inner">
	            <h3>Exciting</h3>
	            <h5>Fear</h5>
	          </div>
	        </div>
	      </div>
	    </div>
	    <div class="col-md-6  col-sm-6 col-xs-12 selector photography">
	      <div class="item">
	        <img src="img/mirrors2.jpg" alt="Image of a bird in front of a mirror">
	        <div class="overlay">
	          <div class="overlay-inner">
	            <h3>Exciting</h3>
	            <h5>Fear</h5>
	          </div>
	        </div>
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
            <h5>Oscar</h5>
            <span>Friday at 01:00 PM</span>
            <p>Great theme!</p>
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
            <h5>Kate</h5>
            <span>Monday at 10:00 AM</span>
            <p>Nice job Guys, i love it so much !</p>
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
										alert("Your comment has been submitted !");
									}
								</script>
                            </div>
                 </form>
      </div>
    </div>
  </body>
</html>
