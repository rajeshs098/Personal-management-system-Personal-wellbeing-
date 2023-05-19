<?php include('server.php') ?>
<?php 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: sm\sta.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: sm\sta.php");
  }
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>PERSONAL WELLBEING</title>
  <link rel="stylesheet" href="./navss.css">

</head>
<body>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="FIT-CLUB">
  <meta name="keywords" content=" gym, fitness, bodybuilding
,la fitness
 ,24 hour fitness,exercise,how to lose weight, weight loss, fitness first,
workout, lifetime fitness,">
  <meta name="author" content="Mehran Banbersta">
  <title>ok</title>

  <!-----  fontawesome icons  ----->
  <script src="https://kit.fontawesome.com/yourcode.js"></script>
  <script src="https://kit.fontawesome.com/e31795c4b4.js" crossorigin="anonymous"></script>
  <!---x---  fontawesome icons  ----x--->

</head>

<body>
<!------------  Header (logo name and open and close button and javascript function navgation bar)  -------------------->

  <header>
  
    <!-- Close button  -->

  
    <div id="mySidenav" class="side-nav">
      <a href="javascript:void(0)" onclick="closeNav()" class="close-btn">
        <span class="close-btn_1"></span>
        <span class="close-btn_2"></span>
      </a>
     
      <ul>
      
        <!-- Search form 
        <form>
        <input type="text" placeholder="how can I help you?" name="search">
      </form> 
             Side navigation bar -->
        <li><a href="index.php">Home</a></li>
        <li><a href="health.php">Health</a></li>
        <li><a href="imgfile.php">Memories &#9663;</i></a>
          <ul class="dropdown-nav_list">
            <li>
              <a href="up.php">Images</a>
            <a href="fileup.php">Files</a>
          </li>
            
          </ul>
          
        </li>
     <!-- <li><a href="#About me">About me</a></li> -->
     <li><a href="imgfile.php">Personal training &#9663;</i></a>
     <ul class="dropdown-nav_list">
            <li>
              <a href="gymtimetable.php">GYM</a>
            <a href="bmi.php">BMI</a>
          <a href="">Healthy food</a>
          </li>
        
          </ul>
          <li><a href="php-calendar-master\html\index.php">calender</a></li>
    
<li><a href="#Reservation">Reservation</a></li>
    <li><a href="#Training schedule"> Schedule</a></li>
   
        <li><a href="aboutus/aboutus.php">Contact</a></li>
        <li><a href="index.php?logout='1'"><h2>Logout</h2></a></li>
      </ul>
    </div>

    <!--Main menu and Logo name and open menu button  -->

    <div id="main">

      <div class="logo">
      </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <a href="javascript:void(0)" class="open-btn" onclick="openNav()">
  
        <h6>###</h6>
      </a>

    </div>
  <!--- Main search form,  join and my fit club button-->
    <!-- <div class="main-nav_item">  
      <form>
        <input type="text" placeholder="how can I help you?" name="search">
      </form>
      <a href="#Contact">Join</a>
     </div> -->
     


  </section>
 
</body>

</html>
<!-- partial -->
  <script  src="./navjs.js"></script>

</body>
</html>
