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

<html class="desktop mbr-site-loaded"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>PERSONL WELLBEIGN</title>
  <link rel="stylesheet" href=".\ss\tmt\mobirise2.css">
  <link rel="stylesheet" href=".\ss\tmt\tether.min.css">
  <link rel="stylesheet" href=".\ss\tmt\bootstrap.min.css">
  <link rel="stylesheet" href=".\ss\tmt\bootstrap-grid.min.css">
  <link rel="stylesheet" href=".\ss\tmt\bootstrap-reboot.min.css">
  <link rel="stylesheet" href=".\ss\tmt\style.css">
  <link rel="stylesheet" href=".\ss\tmt\styles.css">
  <link rel="stylesheet" href=".\ss\tmt\style(1).css">
   <link rel="preload" as="style" href=".\ss\tmt\mbr-additional.css"><link rel="stylesheet" href=".\ss\tmt\mbr-additional.css" type="text/css">
 <body>
  <section class="menu menu1 cid-svGZR3ZApP" once="menu" id="menu1-f">
    
    <nav class="navbar navbar-dropdown navbar-fixed-top navbar-expand-lg navbar-short">
        <div class="container">
            <div class="navbar-brand">
                
                <span class="navbar-caption-wrap"><a class="navbar-caption text-info display-2" href="">PERSONL WELLBEING</a></span>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true"><li class="nav-item"><a class="nav-link link text-warning display-7" href="">
                Welcome <strong>'<?php echo $_SESSION['username']; ?>'</strong></a></li>
          
    	                      
                    <li class="nav-item"><a class="nav-link link text-warning display-7" href="aboutus/aboutus.php">
                            About</a></li>
                    <li class="nav-item"><a class="nav-link link text-warning display-7" href="feedback.php">
                            Feedback</a></li>
                            <li class="nav-item"><a class="nav-link link text-warning display-7" href="index.php?logout='1'"><h2>Logout</h2></a></li>
                   </ul>

                
            </div>
        </div>
    </nav>
</section>
<section class="features4 cid-svGY4J6ohy" id="features04-3">
    
    
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="title align-left mbr-fonts-style mb-5 display-2"><strong>Dashboard</strong></h2>

            </div>
            <div class="card col-12 col-md-12 col-lg-6">
                <div class="card-wrapper">
                    <h3 class="card-number mbr-fonts-style display-5"><strong>01</strong></h3>


                    <div class="card-box">
                        <a href="create.php" h4 class="card-title mbr-fonts-style mb-2 display-5"><strong>Note</strong></h4></a>
                        
                    </div>
                    <span class="mbr-iconfont m-auto mobi-mbri-arrow-next mobi-mbri"></span>
                </div>
            </div>
            <div class="card col-12 col-md-12 col-lg-6">
                <div class="card-wrapper">
                    <h3 class="card-number mbr-fonts-style display-5"><strong>02</strong></h3>


                    <div class="card-box">
                        <a href="hell.php" h4 class="card-title mbr-fonts-style mb-2 display-5"><strong>Health</strong></h4></a>
                        
                    </div>
                    <span class="mbr-iconfont m-auto mobi-mbri-arrow-next mobi-mbri"></span>
                </div>
            </div>
            <div class="card col-12 col-md-12 col-lg-6">
                <div class="card-wrapper">
                    <h3 class="card-number mbr-fonts-style display-5"><strong>02</strong></h3>


                    <div class="card-box">
                    <a href="imgfile.php" h4 class="card-title mbr-fonts-style mb-2 display-5"><strong>Pics</strong></h4></a>
                        
                    </div>
                    <span class="mbr-iconfont m-auto mobi-mbri-arrow-next mobi-mbri"></span>
                </div>
            </div>
            <div class="card col-12 col-md-12 col-lg-6">
                <div class="card-wrapper">
                    <h3 class="card-number mbr-fonts-style display-5"><strong>04</strong></h3>


                    <div class="card-box">
                    <a href="gymbmi.php" h4 class="card-title mbr-fonts-style mb-2 display-5"><strong>Files</strong></h4></a>
                        
                    </div>
                    <span class="mbr-iconfont m-auto mobi-mbri-arrow-next mobi-mbri"></span>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="features5 cid-svH12O6SZ6" id="features05-h">
    
    
    <div class="container">
        
        <div class="row">
            <div class="item features-image сol-12 col-md-6 col-lg-6">
                <div class="item-wrapper">
                    <div class="item-img">
                        <img src="image/imgi.png" alt="">
                    </div>
                    <div class="item-content">
                        <a href="imgview.php" h5 class="item-title mbr-fonts-style display-5"><strong>Memories</strong></h5></a>
                        
                        
                    </div>
                    
                </div>
            </div>
            <div class="item features-image сol-12 col-md-6 col-lg-6">
                <div class="item-wrapper">
                    <div class="item-img">
                        <img src="image/gymi.png" alt="">
                    </div>
                    <div class="item-content">
                        <a href="gymbmi.php" h5 class="item-title mbr-fonts-style display-5"><strong>Gym Campanion</strong></h5></a>
                        
                        
                    </div>
                    
                </div>
            </div>

        </div>
    </div>
</section>
</body></html>
