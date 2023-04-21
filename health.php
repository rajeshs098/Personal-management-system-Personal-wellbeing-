
<?php include('NAV.php') ?>
    <!DOCTYPE html>
<html>
<head>
<style>
* {

  box-sizing: border-box;
}
body{
  background:gray;
}
input[type=text], select, textarea {
  width: 100%;
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
  background-color: #04AA6D;
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
  background-color: #f2f2f2;
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
</head>
<body>

<div class="container">
  <form action="/action_page.php">
  <div class="row">
    <div class="col-25">
      <label for="fname">medication name</label>
    </div>
    <div class="col-75">
      <input type="text" id="fname" name="medication_name" placeholder="Your Blood Pressure:..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="lname">dose</label>
    </div>
    <div class="col-75">
      <input type="number" id="lname" name="dose" placeholder=" Allergies..type">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="country">time</label>
    </div>
    <div class="col-75">
      <select id="country" name="frequency">
        <option value="australia">mrg</option>
        <option value="canada">noon</option>
        <option value="usa">night</option>
      </select>
    </div>
  </div>
  <!-- <div class="row"> 
    <div class="col-25">
      <label for="subject">start_date</label>
    </div>
    <div class="col-75">
      <textarea id="subject" name="start_date" placeholder="report.." style="height:200px"></textarea>
    </div>

  </div>
  <div class="row">
    <div class="col-25">
      <label for="subject">end_date</label>
    </div>
    <div class="col-75">
      <textarea id="subject" name="end_date" placeholder="report.." style="height:200px"></textarea>
    </div>
    
   </div> -->
   <div class="row">
    <div class="col-25">
      <label for="fname">start_date</label>
    </div>
    <div class="col-75">
      <input type="date" id="fname" name="start_date" placeholder="Your Blood Pressure:..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="fname">end_date</label>
    </div>
    <div class="col-75">
      <input type="date" id="fname" name="end_date" placeholder="Your Blood Pressure:..">
    </div>
  </div>
  <br>
  <div class="row">
    <input type="submit"name="Submit" value="Submit">
  </div>
  </form>
</div>
</body>
</html>
<?php
// Check if form was submitted
if(isset($_POST['submit'])) {

    // Get form data
    $username = $_SESSION['username'];
    $medication_name = $_POST['medication_name'];
    $dose = $_POST['dose'];
    $frequency = $_POST['frequency'];
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];

    // Insert data into database
    $sql = "INSERT INTO medication_schedule (username, medication_name, dose, frequency, start_date, end_date)
    VALUES ('$username', '$medication_name', '$dose', '$frequency', '$start_date', '$end_date')";

    if (mysqli_query($db, $sql)) {
        echo "Medication schedule added successfully";
    } else {
        echo "Error adding medication schedule: " . mysqli_error($db);
    }
}
?>
 <?php

// Get the user's ID
$username = $_SESSION['username'];

// Retrieve the user's medication schedule from the database
$sql = "SELECT medication_name, dose, frequency, start_date, end_date FROM medication_schedule WHERE username = '$username' order by start_date";
$result = mysqli_query($db, $sql);

// Check if query was successful
if (mysqli_num_rows($result) > 0) {
    echo "<table>";
    echo "<tr>
            <th>Medication Name</th>
            <th>Dose</th>
            <th>Frequency</th>
            <th>Start Date</th>
            <th>End Date</th>
          </tr>";
    // Output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
                <td>".$row["medication_name"]."</td>
                <td>".$row["dose"]."</td>
                <td>".$row["frequency"]."</td>
                <td>".$row["start_date"]."</td>
                <td>".$row["end_date"]."</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "No medication schedule found for this user";
}

?>

