<?php include 'filesLogic.php';?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="file/filestyle.css">
    <title>Files Upload and Download</title>
  </head>
  
  <body style="background: linear-gradient(110deg, #a78b85 60% ,#E8DFE0 60%);">
  <div class="c">
    
        <form action="fileup.php" method="post" enctype="multipart/form-data" >
          <h1>Upload File</h1>
          <input class="button-55" type="file" name="myfile"> <br><br>
          <button class="button-55" type="submit" name="save">upload</button><br><br>
          <a class="button-55" href="downloads.php"> your files</a>

        </form>
        
        <style>


.button-55 {
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
.c{
    padding-right: 550px;
    padding-bottom: 100px;
}
.text{
  padding-right: 200px;
    padding-bottom: 100px;
}



        </style>
        
        
         
      </div>
    </div>
    </div>
  </body>
</html>