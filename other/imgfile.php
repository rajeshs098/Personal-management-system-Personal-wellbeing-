

<?php include('NAV.php') ?>
<?php
// Retrieve the count from the database
$username =$_SESSION['username'];
$sql="SELECT COUNT(*) AS count FROM images WHERE username='$username'";
$result = mysqli_query($db,$sql);
$row = mysqli_fetch_array($result);
  ?>
   <?php
// Retrieve the count from the database
$username =$_SESSION['username'];
$sql="SELECT COUNT(*) AS num FROM files WHERE username=' $username'";
$result = mysqli_query($db,$sql);
$data= mysqli_fetch_array($result);
  ?>

<!DOCTYPE html>
<style>
  body{
    
background-image: url(image/113.jpeg);}
</style> 

  <html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>files</title>
  <script src="//use.typekit.net/xyl8bgh.js"></script>
<script>try{Typekit.load();}catch(e){}</script><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel='stylesheet' href='//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>
<link rel='stylesheet' href='https://codepen.io/andytran/pen/vLmRVp.css'><link rel="stylesheet" href="./ttt.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="container">
  <div class="info">
 
    <h1>Your Memories</h1><span><a href=''><h2>Important Document</h2></a></span>
  </div>
  <!-- Normal Demo-->
  <div class="column">
    <div class="demo-title">IMAGES</div>
    <!-- Post-->
    <div class="post-module">
      <!-- Thumbnail-->
      <div class="thumbnail">
        <div class="date">
          <div class="day"><?php echo $row['count'];?></div>
          <div class="month">Pics</div>
        </div><img src="image\10.jpg"/>
      </div>
      <!-- Post Content-->
      <div class="post-content">
        <div class="category"><a href="up.php">Upload</a></div>
        <h1 class="title">Pics</h1>
        <h2 class="sub_title">Till date u have '<?php echo $row['count'];?>'pic</h2>
        <p class="description">To Upload more click on Upload. </p>
        <div class="post-meta"><span class="timestamp"><i class="fa fa-clock-">o</i> 6 mins ago</span><span class="comments"><i class="fa fa-comments"></i><a href="#">insta </a></span></div>
      </div>
    </div>
  </div>
 
  <div class="column">
    <div class="demo-title">FILES</div>
    <!-- Post-->
    <div class="post-module">
      <!-- Thumbnail-->
      <div class="thumbnail">
        <div class="date">
          <div class="day"><?php echo $data['num'];?></div>
          <div class="month">Files</div>
        </div><img src="image\102.jpg"/>
      </div>
      <!-- Post Content-->
      <div class="post-content">
        <div class="category"><a href="fileup.php">Browse</a></div>
        <h1 class="title">Docx</h1>
        <h2 class="sub_title">Here you can Safe Guard ur files</h2>
        <p class="description"> To Upload more DOX click on Browse.</p>
        <div class="post-meta"><span class="timestamp"><i class="fa fa-clock-">o</i> 10 mins ago</span><span class="comments"><i class="fa fa-comments"></i><a href="#">insta </a></span></div>
      
      </div>
    </div>
  </div>
</div>
<!-- partial -->
  <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://codepen.io/andytran/pen/vLmRVp.js'></script><script  src="./script.js"></script>
<br><br><br>
</body>
</html>
