<style>
    body
{
    background-image: url(image/workoutimg/60.jpg); 
}

 .container {
  border-radius: 15px;
  color:white;
  
  padding: 20px;

  }
</style>

<?php include('NAV.php') ?>
<html>


    <!-- Bootstrap core CSS -->
    <link href="boot/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="boot/css/main.css" rel="stylesheet">
    <link href="http://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css" text="text/css" rel="stylesheet">
    <link href="boot/css/jquery.bxslider.css" rel="stylesheet" />
    <link href="boot/css/jquery-ui-1.10.4.custom.min.css" rel="stylesheet" />
     <!-- Placed at the end of the document so the pages load faster -->
     <script type="text/JavaScript" src="boot/js/sha512.js"></script> 
        <script type="text/JavaScript" src="boot/js/forms.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="boot/js/bootstrap.min.js"></script>
    <SCRIPT TYPE="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></SCRIPT>
    <script type="text/javascript" src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
 <SCRIPT src="boot/js/dialog.js" type="text/javascript"></SCRIPT>
 <script src="boot/js/jquery.bxslider.min.js"></script>
  <script type="text/javascript" src="boot/js/slide.js"></script>
  <script src="boot/js/plugins/jquery.fitvids.js"></script>
  
  <body>


    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class=""></div>  
      <!-- too add vids -->
          <!-- <li> -->
    <!-- <iframe src="image\ss.mp4" width="500" height="281" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe> -->
  <!-- </li> -->   
  <ul class="bxslider">
  <li><img src="image\workoutimg\19.jpg" /></li>
  <li><img src="image\workoutimg\13.jpg" /></li>
  <li><img src="image\workoutimg\14.jpg" /></li>
  <li><img src="image\workoutimg\15.jpg" /></li>
  <li><img src="image\workoutimg\16.jpg" /></li>
  <li><img src="image\workoutimg\17.jpg" /></li>
  <li><img src="image\workoutimg\18.jpg" /></li>
  <li><img src="image\workoutimg\11.jpg" /></li>
</ul>
     </div>

  </body>




  <div class="container">
   <i> <h1><P>DAY :: YOUR PLANS ARE </P></h1><h2></i>

  <?php
// Retrieve the workout plans from the database
$username =$_SESSION['username'];
$sql = "SELECT * FROM workout_plans where username='$username'";
$result = mysqli_query($db, $sql);
while ($row = mysqli_fetch_array($result)) {
  echo $row['day'] . " :-  is for  '" . $row['bodypart'] . "' and  you should do '" . $row['sets'] . "' sets of  above shown workout,
  for '" . $row['workout_time'] . "' hrs!!,please drink water and take rest between each sets 🤍;";
  echo "<br><br>";
}
?>
</h2>
 <a href="gymform.php"><button name="CHANGE" type="view">CHANGE PLAN</button></a>
</div>
