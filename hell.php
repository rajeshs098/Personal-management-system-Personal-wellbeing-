<?php include('NAV.php') ?>

<style>
* {

  box-sizing: border-box;
  
}
body{
  background:gray;
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
  position: center;
  width: 50%;
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
    width: 50%;
    margin-top: 0;
  }
}
</style>
<p>&nbsp;</p>&nbsp;<p>&nbsp;</p>
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
 


;
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
<body>

<p>&nbsp;<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 
    
<div class="container">

  <form action="hell.php" method="post">
  <div class="row">
    <div class="col-25">
    <label for="heart_rate">medication_name</label>
    </div>
    <div class="col-75">
    <input type="text" id="heart_rate" name="medication_name" required ><br>
   </div>
  </div>
  <div class="row">
    <div class="col-25">
    <label for="allergies">dose</label>
    </div>
    <div class="col-75">
    <input type="number" id="allergies" name="dose"><br>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="country">time</label>
    </div>
    <div class="col-75">
      <select id="country" name="frequency" required>
        <option value="mrg">mrg</option>
        <option value="noon">noon</option>
        <option value="nyt">night</option>
      </select>
    </div>
  </div>
    <div class="row">
    <div class="col-25">
    <label for="conditions">start_date</label>
    </div>
    <div class="col-75">
    <input type="date" id="conditions" name="start_date" required><br>
    </div>
  </div>
    <div class="row">
    <div class="col-25">
    <label for="conditions">end_date</label>
    </div>
    <div class="col-75">
    <input type="date" id="conditions" name="end_date"required><br>
    </div>
  </div>
    <div class="row">
    
    <input type="submit" value="Submit" name="submit">
    <input type="submit" value="up" name="update">

  </div>
</form>

 