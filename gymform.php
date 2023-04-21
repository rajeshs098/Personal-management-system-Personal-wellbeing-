
<?php include('NAV.php')?>
<style>
  body{ background-image: url(image/workoutimg/60.jpg); }
* {
  box-sizing: border-box;
  color:gray;
}

input[type=text], select, textarea {
  width: 50%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #04aa6d; 
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
   background-color: #45a049; 
}

.container {
  border-radius: 5px;
  /* background-color: #f2f2f2;  */
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
<div class="container">
<form method="post" action="gymform.php">
 <input  readonly="text" value="<?php echo $_SESSION['username'];?>" name="username">
 <div class="row">
    <div class="col-25">
      <label for="DAY">DAY</label>
    </div>
    <div class="col-75">
 <input type="text" name="day" placeholder="day"required>
</div>
</div>
<div class="row">
    <div class="col-25">
      <label for="fname">WORKOUT FOR</label>
    </div>
    <div class="col-75">
  <input type="text" name="bodypart" placeholder="bodypart"required>
  </div>
</div>
<div class="row">
    <div class="col-25">
      <label for="fname">HOW MAY SETS</label>
    </div>
    <div class="col-75">
  <input type="text" name="sets" placeholder="sets"required>
  </div>
</div>
<div class="row">
    <div class="col-25">
      <label for="fname">WORKOUT TIME</label>
    </div>
    <div class="col-75">
  <input type="text" name="workout_time" placeholder="workout_time Time (HRS)"required>
</div>
</div>
  <input type="submit" name="submit" value="Add Workout">
</form>
</html>
<?php
// Check for form submission
if (isset($_POST['submit'])) {
  // Get the form data
  $username = mysqli_real_escape_string($db,$_POST['username'] );
  $day = mysqli_real_escape_string($db, $_POST['day']);
  $bodypart = mysqli_real_escape_string($db, $_POST['bodypart']);
  $sets = mysqli_real_escape_string($db, $_POST['sets']);
  $workout_time = mysqli_real_escape_string($db, $_POST['workout_time']);
  $sql = "INSERT INTO workout_plans (username,day, bodypart, sets, workout_time) VALUES ('$username','$day', '$bodypart', '$sets', '$workout_time')";
  mysqli_query($db, $sql);
  header('location:gymform.php');
}
?>
  <?php
// Check for delete request
if (isset($_GET['delete'])) {
  $id = mysqli_real_escape_string($db, $_GET['delete']);
  $sql = "DELETE FROM workout_plans WHERE id = $id";
  mysqli_query($db, $sql);
}
?>
<h3>
<?php
// Retrieve the workout plans from the database
$username =$_SESSION['username'];
$sql = "SELECT * FROM workout_plans where username='$username'";
$result = mysqli_query($db, $sql);
while ($row = mysqli_fetch_array($result)) {
  echo $row['day'] . " :-" . $row['bodypart'] . " bodypart  " . $row['sets'] . " sets with " . $row['workout_time'] . " hrs workout_time";
  echo "<br>";
  echo "<a href='?delete=" . $row['id'] . "'>Delete</a>";
  echo "<br><br>";
}
?></h3>