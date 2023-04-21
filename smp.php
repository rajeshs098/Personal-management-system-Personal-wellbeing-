<style>
    body
{
    background-image: url(image/104.jpg);
}
</style>


    <?php include('NAV.php') ?>

    <!DOCTYPE html>
    
   
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Note </title>
    <link rel="stylesheet" href="//stackpath.bootstrapcdn.com/bootswatch/4.5.2/flatly/bootstrap.min.css">
    <style>
        textarea {
            resize: vertical; /* allow only vertical stretch */
        }
    
table {
  border-collapse: collapse;
  width: 100%;
  background:gray;
}

th, td {
  padding: 15px;
  text-align: left;
  border-bottom: 2px solid white;
}

tr:hover {background-color: coral;}
    </style>
</head>
<div class="container">
        <div class="row pt-3">
            <div class="col">
                <div class="card">
                    <span>
                
                    <h1 class="card-title text-center">CREATE A NEW NOTE</h5>
                    </span>
                        <div class="card-body">
                            <form action="smp.php" method="post">
                            <div class="form-group">
           
           <input   class="form-control" readonly="text" value="<?php echo $_SESSION['username'];?>" name="username">
           </div>
                                <div class="mb-3">
                                    <label for="title" class="form-label">Title</label>
                                    <input type="text" class="form-control" id="title" name="title" placeholder="An indecredible title" required />
                                </div>
                                <div class="mb-3">
                                    <label for="content" class="form-label">Content</label>
                                    <textarea class="form-control" id="content" name="content" placeholder="enter anything..." rows="3" required></textarea>
                                </div>

                                <label for="priority" class="form-label">==</label>
                               
                                <button class="btn btn-danger" type="reset"><span class="fa fa-times mr-2"></span>Clear</button>
                                
                                <button class="btn btn-success" name="new" type="submit"><span class="fa fa-paper-plane mr-2"></span>Save</button>
                            </form>
                            

                            <form>  <button name="view" type="view">view</button></form>
                        </div>
                </div>
            </div>
        </div>
    </div>

   
  <?php  if (isset($_POST['new'])) {
  // receive all input values from the form
  
  $title = mysqli_real_escape_string($db, $_POST['title']);
  $content = mysqli_real_escape_string($db, $_POST['content']);
  $username = mysqli_real_escape_string($db,$_POST['username'] );
  $query = "INSERT INTO note (title, content,username) 
  VALUES('$title', '$content','$username')";
mysqli_query($db, $query);

  }
  if (isset($_GET['view'])){
    $username = $_SESSION['username'];
   $result = mysqli_query($db, "SELECT * FROM note where username='$username'");?>
   <table>
   <tr>
   <i> <th><i><h3>Date : Details</h3></i> </th>
  </tr>
  </table>
 <?php while ($row = mysqli_fetch_array($result)) { ?>

<table>
<tr> 
<td><?php echo $row['time']; ?><h3>note::</h3></td>
<td><?php echo $row['title']; ?></td>
</tr>
</table>
<?php }
  }
  ?>
</html>