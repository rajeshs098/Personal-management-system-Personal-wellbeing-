<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>PS</title>
  

</head>
<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
   
    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <input type="checkbox" id="flip">
    <div class="cover">
      <div class="front">
        <img src="images/frontImg.jpg" alt="">
        <div class="text">
          <span class="text-1">To start fresh <br> To eat right <br> To train hard <br> To live healthy <br>  To be proud </span>
          <span class="text-2"><br>Let's get connected</span>
        </div>
      </div>
      <div class="back">
        <img class="backImg" src="images/backImg.jpg" alt="">
        <div class="text">
          <span class="text-1">Complete miles of journey <br> with one step</span>
          <span class="text-2"><br>Let's get started</span>
        </div>
      </div>
    </div>
    <div class="forms">
        <div class="form-content">
          <div class="login-form">
            <div class="title">Login</div>
          <form method="post" action="login.php">
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <label for="username"></label>
                <input type="text" placeholder="Enter your username" name="username" required>
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Enter your password" name="password" required>
              </div>
              
              <div class="button input-box">
                <input type="submit" name="login_user">login
              </div>
              <div class="text sign-up-text">Don't have an account? <label for="flip">Sigup now</label></div>
            </div>
        </form>
      </div>
        <div class="signup-form">
          <div class="title">Signup</div>
        <form method="post" action="login.php">
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-user"></i>
                <label for="username"></label>
                <input type="text" placeholder="Enter your name" name="username" value="<?php echo $username; ?>" required>
              </div>
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <label for ="email"></label>
                <input type="email" placeholder="mail" name="email" value="<?php echo $email; ?>">
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <label for="password"></label>
                <input type="password" placeholder="Password" name="password_1">

                
  	  <input type="password" placeholder="Confirm password" name="password_2">
              </div>
              <div class="button input-box">
              <input type="submit"  name="reg_user">register
              </div>
              <div class="text sign-up-text">Already have an account? <label for="flip">Login now</label></div>
            </div>
      </form>
    </div>
    </div>
    </div>
  </div>
</body>
</html>
