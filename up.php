
<?php include ('NAV.PHP') ?>
<!DOCTYPE html>
<html lang="en">

  
<body style="background-image: radial-gradient(circle farthest-side,#E8DFE0,#a78b85);">

    <form class="border" action="up.php" method="post" enctype="multipart/form-data">
     <h1> <a class="s"> select your fav images</a></h1>
        
        <input class="button-55" type="file" name="image" Required/><br><br>
	    <input class="button-55" type="submit" name="submit" value="UPLOAD"/><br><br>
        <a class="button-55"  href="imgview.php">view&nbsp;photos</a>
    </form>
    
  
    <?php


if(isset($_POST["submit"])){
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false){
      $username =$_SESSION['username'];
        $image = $_FILES['image']['tmp_name'];
        $imgContent = addslashes(file_get_contents($image));
	
        /*
         * Insert image data into database
         */
        
         //Create connection and select DB
        
        // Check connection
        if($db->connect_error){
            die("Connection failed: " . $db->connect_error);
        }
        
        $dataTime = date("Y-m-d H:i:s");
        
        //Insert image content into database
        $insert = $db->query("INSERT into images (username, image, created) VALUES ('$username','$imgContent', '$dataTime')");
        if($insert){
            
            header('location:up.php');
        }else{
            echo "File upload failed, <a href='upload.html'>please try again</a>.";
        } 
    }else{
        echo "You have not selected any image. <a href='upload.html'>please try again</a>.";
    }
}
?>


    <style>
      .bg{
        background-image: radial-gradient(circle farthest-side, #fceabb, #f8b500);
      }
      .s{
        color: rgb(146, 159, 109);
        margin: 8px 150px;
        font-size: 40px;
        font-weight: bold;
        
        
      }

      .button-55 {
   margin: 8px 530px;  
   margin-left: 190px;
  align-self: center;
  background-color: antiquewhite;
  background-image: none;
  background-position: 0 90%;
  background-repeat: repeat no-repeat;
  background-size: 4px 3px;
  border-radius: 15px 225px 255px 15px 15px 255px 225px 15px;
  border-style: solid;
  border-width: 2px;
  box-shadow: rgba(0, 0, 0, .2) 15px 28px 25px -18px;
  box-sizing: border-box;
  color: #41403e;
  cursor: pointer;
  display: inline-block;
  font-family: Neucha, sans-serif;
  font-size: 1rem;
  line-height: 10px;
  outline: none;
  padding: .75rem;
  text-decoration: none;
  transition: all 50ms ease-in-out;
  border-bottom-left-radius: 15px 100px;
  border-bottom-right-radius: 225px 15px;
  border-top-left-radius: 255px 15px;
  border-top-right-radius: 15px 225px;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
}

.button-55:hover {
  box-shadow: rgba(0, 0, 0, .3) 2px 8px 8px -5px;
  transform: translate3d(0, 2px, 0);
}

.button-55:focus {
  box-shadow: rgba(0, 0, 0, .3) 2px 8px 4px -6px;
}
.border{
  width: 50%;
  margin: 130px auto;
  padding: 50px;
  border: 6px solid rgb(12, 9, 9);
}




    </style>
    
</body>
</html>