<?php
if(isset($_GET['date'])){
  $date = $_GET['date'];
}

if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $mysqli = new mysqli('mysql.scss.tcd.ie', 'kearnsdo', 'az9Pohxo', 'kearnsdo_db');
  $stmt = $mysqli->prepare("INSERT INTO bookings (name, email, date) VALUES (?,?,?)");
  $stmt->bind_param('sss', $name, $email, $date);
  $stmt->execute();
  $msg = "<div class='alert alert-success'>Booking Successfull. You should receive an email on payment instructions.</div>";
  $stmt->close();
  $mysqli->close();
}

?>
<!doctype html>
<html lang="en">

<head>
  <?php include 'includes/head.php'; ?>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <title></title>
  
  <link rel="stylesheet" href="/css/main.css">
</head>

<body>
  <?php include 'includes/navbar.php'; ?>
  <div class="container">
    <h1 class="text-center">Book for Date: <?php echo date('d/m/Y', strtotime($date)); ?></h1><hr>
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <?php echo isset($msg)?$msg:''; ?>
        <form action="" method="post" autocomplete="off">
          <div class="form-group">
            <label for="">Name</label>
            <input type="text" class="form-control" name="name">
          </div>
          <div class="form-group">
            <label for="">Email</label>
            <input type="email" class="form-control" name="email">
          </div>
          <div class="form-group">
            <label for="">Discount</label>
          <input type="text" name="name">
          </div>
          
            <input type="checkbox" id="vehicle1" name="vehicle1">
            <label for="vehicle1"> Adult €25</label><br>
            <input type="checkbox" id="vehicle2" name="vehicle2">
            <label for="vehicle2">Student €20</label><br>
            <input type="checkbox" id="vehicle3" name="vehicle3">
            <label for="vehicle3"> Group (10+) €200</label><br><br>
          
          
          <button class="btn btn-primary" type="submit" name="submit">Submit</button>
          <a class="btn btn-secondary" href="calendar.php" role="button">Back</a>
        </form>
      </div>
    </div>
  </div>
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  
</body>

</html>
