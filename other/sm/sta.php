<!DOCTYPE html>
<!-- saved from url=(0071)file:///C:/xampp/htdocs/test/ss/slider-animation-effect/dist/index.html -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  
  <title>Personal Wellbeing</title>
  <link rel="stylesheet" href="./start/reset.min.css">
<link rel="stylesheet" href="./start/css">
<link rel="stylesheet" href="./start/css(1)"><link rel="stylesheet" href="./start/style.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet' href='https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css'>
<style>
  body{
  background:"55.jpg";
  }
  </style>
</head>
<?php
$db = mysqli_connect('localhost', 'root', '', 'project');
// Retrieve the count from the database
$sql="SELECT COUNT(*) AS count FROM users";
$result = mysqli_query($db,$sql);
$row = mysqli_fetch_array($result);

$sql="SELECT COUNT(*) AS count1 FROM images";
$result = mysqli_query($db,$sql);
$row1 = mysqli_fetch_array($result);

$sql="SELECT COUNT(*) AS count2 FROM files";
$result = mysqli_query($db,$sql);
$row2 = mysqli_fetch_array($result);

$sql="SELECT COUNT(*) AS count3 FROM notes";
$result = mysqli_query($db,$sql);
$row3 = mysqli_fetch_array($result);
  ?>
<body>

<!-- partial:index.partial.html -->
<div id="app" class="wrapper first-load"><div class="slide-wrapper active" style="z-index: 3; background-image: url(&quot;55.jpg&quot;);"><div class="slide-inner"><div class="slide-bg-text"><p>Personl</p> <p>wellbeign</p></div> <div class="slide-rect-filter"><div class="slide-rect" style="border-image-source: url(&quot;https://i.postimg.cc/vTW0XkvM/slide-rect0.jpg&quot;);"></div></div>

<div class="slide-content"><h1 class="slide-content-text"><p>Personal</p><p>Wellbeing</p></h1><a href="http://localhost/other/login.php"class="slide-content-cta">explore</a><a href="abhiraj.pdf"class="slide-content-cta">Document</a></div> <h2 class="slide-side-text"><span>your companion</span><span>....</span></h2></div></div><div class="slide-wrapper" style="z-index: 2; background-image: url(&quot;https://i.postimg.cc/Qx34VNXM/slide1.jpg&quot;);"><div class="slide-inner"><div class="slide-bg-text"><p>Nulla</p> <p>Auctor</p></div> <div class="slide-rect-filter">
  <div class="slide-rect" style="border-image-source: url(&quot;https://i.postimg.cc/ryWZ8R2b/slide-rect1.jpg&quot;);"></div></div>
    <div class="slide-bg-text"><p>Nullam</p> <p>Ultricies</p></div> <div class="slide-rect-filter"><div class="slide-rect" style="border-image-source: url(&quot;https://i.postimg.cc/3JFLGMRF/slide-rect2.jpg&quot;);"></div></div> <div class="slide-content"><h1 class="slide-content-text"><p>Nullam</p><p>Ultricies</p></h1><a class="slide-content-cta">Call To Action</a></div> <h2 class="slide-side-text"><span>Τίποτα καινούργιο κάτω από / </span><span>τον ήλιο</span></h2></div></div> <div class="controls-container"><button class="controls-button">date</button></div> <div class="pagination-container"><span class="pagination-item active"></span>
      <span class="pagination-item"></span><span class="pagination-item"></span>
    <!-- partial:index.partial.html -->

<div class="wrapper">
  <h1>Till date we have achieved</h1>
    <div class="counter col_fourth">
      <i class="fa fa-code fa-2x"></i>
      <h2 class="timer count-title count-number" data-to="<?php echo $row['count'];?>" data-speed="1500"></h2>
       <p class="count-text ">Users</p>
    </div>

    <div class="counter col_fourth">
      <i class="fa fa-coffee fa-2x"></i>
      <h2 class="timer count-title count-number" data-to="<?php echo $row1['count1'];?>" data-speed="1500"></h2>
      <p class="count-text ">cloud images</p>
    </div>

    <div class="counter col_fourth">
      <i class="fa fa-lightbulb-o fa-2x"></i>
      <h2 class="timer count-title count-number" data-to="<?php echo $row2['count2'];?>" data-speed="1500"></h2>
      <p class="count-text ">Files</p>
    </div>

    <div class="counter col_fourth end">
      <i class="fa fa-bug fa-2x"></i>
      <h2 class="timer count-title count-number" data-to="<?php echo $row3['count3'];?>" data-speed="1500"></h2>
      <p class="count-text ">Notes</p>
    </div>
</div></div></div>
<!-- partial -->
  <script src="./start/vue.min.js.download"></script><script src="./start/script.js.download"></script>

 
  <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="./start/script.js"></script>



</body>
</html>