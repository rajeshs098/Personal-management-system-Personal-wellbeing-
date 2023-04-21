
<?php include('NAV.php') ?>

<!DOCTYPE html>
<style>
  body{
    
background-image: url(image/workoutimg/57.jpg);}
</style>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>GYM</title>
  <script src="//use.typekit.net/xyl8bgh.js"></script>
<script>try{Typekit.load();}catch(e){}</script><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel='stylesheet' href='//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>
<link rel='stylesheet' href='https://codepen.io/andytran/pen/vLmRVp.css'><link rel="stylesheet" href="./ttt.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="container">
  <div class="info">
    <h1>GYM COMPANION</h1><span><a href=''><h2>No Pain No Gain, Just Do It</h2></a></span>
  </div>
  <!-- Normal Demo-->
  <div class="column">
    <div class="demo-title">BMI</div>
    <!-- Post-->
    <div class="post-module">
      <!-- Thumbnail-->
      <div class="thumbnail">
        <div class="date">
          <div class="day"><?php echo date("d")?></div>
          <div class="month"><?php echo date("l")?></div>
        </div><img src="image\workoutimg\18.jpg"/>
      </div>
      <!-- Post Content-->
      <div class="post-content">
        <div class="category"><a href="bmi.php">Click</a></div>
        <h1 class="title">Know your BMI</h1>
        <h2 class="sub_title">...</h2>
        <p class="description">what is BMI then ? to know about it click above.</p>
        <div class="post-meta"><span class="timestamp"><i class="fa fa-clock-">o</i> 6 mins ago</span><span class="comments"><i class="fa fa-comments"></i><a href="#"> 39 comments</a></span></div>
      </div>
    </div>
  </div>
  <!-- Hover Demo-->
  <div class="column">
    <div class="demo-title">GYM </div>
    <!-- Post-->
    <div class="post-module hover">
      <!-- Thumbnail-->
      <div class="thumbnail">
        <div class="date">
          <div class="day"><?php echo date("d")?></div>
          <div class="month"><?php echo date("l")?></div>
        </div><img src="image\workoutimg\15.jpg"/>
      </div>
      <!-- Post Content-->
      <div class="post-content">
        <div class="category"><a href="gymtimetable.php">Click</a></div>
        <h1 class="title">Your Schedule</h1>
        <h2 class="sub_title">...</h2>
        <p class="description">By clicking above to can see today's workoutplan..</p>
        <div class="post-meta"><span class="timestamp"><i class="fa fa-clock-o"></i> <?php echo "@".date("h:i")?></span><span class="comments"><i class="fa fa-comments"></i><a href="#"> 39 comments</a></span></div>
      </div>
    </div>
  </div>
</div>
<!-- partial -->
  <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://codepen.io/andytran/pen/vLmRVp.js'></script><script  src="./script.js"></script>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>d<br>
</body>
</html>