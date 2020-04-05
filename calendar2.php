<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'includes/head.php'; ?>

<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>


<body>

<?php include 'includes/navbar.php'; ?>

<!--- Meet the rooms -->
<div class="container-fluid padding">
	<div class="row welcome text-center">
<div class="col-12">
	<h1 class="display-4">Mental Room Calendar</h1>
</div>
<hr>
</div>
</div>

<?php
function build_calendar($month, $year) {
<<<<<<< HEAD
   $mysqli = new mysqli('mysql.scss.tcd.ie', 'koshkine', 'Nuziev7G', 'koshkine_db');
=======
    $mysqli = new mysqli('localhost', 'root', '', 'calendar');
>>>>>>> 58c2c0ec7553e2f825c2aa69c7b43c20a2dbf0eb
    $stmt = $mysqli->prepare("select * from bookings where MONTH(date) = ? AND YEAR(date) = ?");
    $stmt->bind_param('ss', $month, $year);
    $bookings = array();
    if($stmt->execute()){
        $result = $stmt->get_result();
        if($result->num_rows>0){
            while($row = $result->fetch_assoc()){
                $bookings[] = $row['date'];
            }

            $stmt->close();
        }
    }


     // Create array containing abbreviations of days of week.
     $daysOfWeek = array('Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday');

     // What is the first day of the month in question?
     $firstDayOfMonth = mktime(0,0,0,$month,1,$year);

     // How many days does this month contain?
     $numberDays = date('t',$firstDayOfMonth);

     // Retrieve some information about the first day of the
     // month in question.
     $dateComponents = getdate($firstDayOfMonth);

     // What is the name of the month in question?
     $monthName = $dateComponents['month'];

     // What is the index value (0-6) of the first day of the
     // month in question.
     $dayOfWeek = $dateComponents['wday'];

     // Create the table tag opener and day headers

    $datetoday = date('Y-m-d');

    //Creating the HTML table

    $calendar = "<table class='table table-bordered'>";
    $calendar .= "<center><h2>$monthName $year</h2>";
    $calendar.= "<a class='btn btn-xs btn-primary' href='?month=".date('m', mktime(0, 0, 0, $month-1, 1, $year))."&year=".date('Y', mktime(0, 0, 0, $month-1, 1, $year))."'>Previous Month</a> ";

    $calendar.= " <a class='btn btn-xs btn-primary' href='?month=".date('m')."&year=".date('Y')."'>Current Month</a> ";

    $calendar.= "<a class='btn btn-xs btn-primary' href='?month=".date('m', mktime(0, 0, 0, $month+1, 1, $year))."&year=".date('Y', mktime(0, 0, 0, $month+1, 1, $year))."'>Next Month</a></center><br>";



      $calendar .= "<tr>";

     // Create the calendar headers

     foreach($daysOfWeek as $day) {
          $calendar .= "<th  class='header'>$day</th>";
     }

     // Create the rest of the calendar

     // Initiate the day counter, starting with the 1st.

     $currentDay = 1;

     $calendar .= "</tr><tr>";

     // The variable $dayOfWeek is used to
     // ensure that the calendar
     // display consists of exactly 7 columns.

     if ($dayOfWeek > 0) {
         for($k=0;$k<$dayOfWeek;$k++){
                $calendar .= "<td  class='empty'></td>";

         }
     }


     $month = str_pad($month, 2, "0", STR_PAD_LEFT);

     while ($currentDay <= $numberDays) {

          // Seventh column (Saturday) reached. Start a new row.

          if ($dayOfWeek == 7) {

               $dayOfWeek = 0;
               $calendar .= "</tr><tr>";

          }

          $currentDayRel = str_pad($currentDay, 2, "0", STR_PAD_LEFT);
          $date = "$year-$month-$currentDayRel";

            $dayname = strtolower(date('l', strtotime($date)));
            $eventNum = 0;
            $today = $date==date('Y-m-d')? "today" : "";
         if($date<date('Y-m-d')){
             $calendar.="<td><h4>$currentDay</h4> <button class='btn btn-danger btn-xs'>N/A</button>";
         }elseif(in_array($date, $bookings)){
             $calendar.="<td class='$today'><h4>$currentDay</h4> <button class='btn btn-danger btn-xs'>Already Booked</button>";
         }else{
             $calendar.="<td class='$today'><h4>$currentDay</h4> <a href='book2.php?date=".$date."' class='btn btn-success btn-xs'>Book</a>";
         }




          $calendar .="</td>";
          // Incrementing the counters

          $currentDay++;
          $dayOfWeek++;

     }



     // Completing the row of the last week in month, if necessary

     if ($dayOfWeek != 7) {
          $remainingDays = 7 - $dayOfWeek;
            for($l=0;$l<$remainingDays;$l++){
                $calendar .= "<td class='empty'></td>";

         }

     }

     $calendar .= "</tr>";

     $calendar .= "</table>";

     echo $calendar;

}

?>




    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php
                     $dateComponents = getdate();
                     if(isset($_GET['month']) && isset($_GET['year'])){
                         $month = $_GET['month'];
                         $year = $_GET['year'];
                     }else{
                         $month = $dateComponents['mon'];
                         $year = $dateComponents['year'];
                     }
                    echo build_calendar($month,$year);
                ?>
            </div>
        </div>
    </div>
    <?php include 'includes/footer.php' ?>

    </body>
    </html>
