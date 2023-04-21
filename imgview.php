
<?php include('NAV.php') ?>
<html lang="en">
<h1>Your Fav Image::</h1>
  
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
  <?php
// Retrieve the workout plans from the database
$username =$_SESSION['username'];
$sql = "SELECT * FROM images where username='$username'";
$result = mysqli_query($db, $sql);
?>
  <body style="background-image: radial-gradient(circle farthest-side,#E8DFE0,#a78b85);">
    <div class=""></div>  
       <ul class="bxslider">

      
      <?php while ($row = mysqli_fetch_array($result)){
         echo " <li> <img data-u='image' src='slider.php?id=". $row['id'] . "'><a href='?delete=" . $row['id'] . "'>Delete</a/></li> ";
        }
        
   
?>
     

<?php
// Check for delete request
if (isset($_GET['delete'])) {
    $username =$_SESSION['username'];
  $id = mysqli_real_escape_string($db, $_GET['delete']);
  $sql = "DELETE FROM images WHERE id = $id";
  mysqli_query($db, $sql);
}
?>
</body>
</html>