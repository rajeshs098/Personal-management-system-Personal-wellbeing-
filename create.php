<?php include('NAV.php') ?>
<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username =$_SESSION['username'];
        $title = htmlspecialchars($_POST["title"]);
        $content = htmlspecialchars($_POST["content"]);
        $priority = htmlspecialchars($_POST["priority"]);

        if (!empty($title) && !empty($content) && !empty($priority)) {
            $sql = "INSERT INTO notes(username,title, content, priority) VALUES ('$username','$title','$content','$priority')";

            if ($db->query($sql) === TRUE) {
                echo '<div class="alert alert-success" role="alert">
                        Record updated successfully ðŸ˜Š
                      </div>';
            } else {
                echo '<div class="alert alert-danger" role="alert">
                        An error occurred while updating ðŸ˜± <br>
                        Error:  '.$sql.' <br>  '.$db->error.'
                      </div>';
            }
        }
       
    }
?>


<!DOCTYPE html>
<html lang="en">
<br></br><br></br><br>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
    <link rel="stylesheet" href="assets/css/bootstrap/bootstrap.min.css">
</head>
<style>
    body{
        background:radial-gradient(circle farthest-side,#E8DFE0,#a78b85);
    }
    </style>
<body>

    <div class="container">
        <div class="row pt-3">
            <div class="col">
                <div class="card">
                    <span>
                    <h1 class="card-title text-center">ADD NEW NOTE</h5>
                    </span>
                        <div class="card-body">
                            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                                <div class="mb-3">
                                    <label for="title" class="form-label">Title</label>
                                    <input type="text" class="form-control" id="title" name="title" placeholder="An indecredible title" required />
                                </div>
                                <div class="mb-3">
                                    <label for="content" class="form-label">Content</label>
                                    <textarea class="form-control" id="content" name="content" placeholder="TYPE....!" rows="3" required></textarea>
                                </div>

                                <label for="priority" class="form-label">Prority</label>
                                <select class="form-select" name="priority" required>
                                    <option selected hidden>Select priority</option>
                                    <option value="low">Low</option>
                                    <option value="middle">Middle</option>
                                    <option value="high">High</option>
                                </select>

                                <div class="d-grid gap-2 pt-4">
                                    <button class="btn btn-primary" type="submit">Submit</button>
                                </div>
                            </form>
                        </div>
                </div>
            </div>
        </div>
    </div>

</body>
<?php
   $username = $_SESSION['username'];
    $sql = "SELECT * FROM notes WHERE username='$username'";
    $notes = $db->query($sql);
?>
 <div class="container-fluid">
        <div class="row">
            <div class="col">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col"></th>
                            <th scope="col">Title</th>
                            <th scope="col">Content</th>
                            <th scope="col">Priority</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            if ($notes->num_rows > 0) {
                                while($row = $notes->fetch_assoc()) {
                                    $id = $row["id"];
                                    $title = $row["title"];
                                    $content = $row["content"];
                                    $priority = ucfirst($row["priority"]);
                                    
                                    echo "
                                        <tr>
                                        <td></td>
                                            <td>$title</td>
                                            <td>$content</td>
                                            <td>$priority</td>
                                            <td>
                                                
                                                <a class='btn btn-secondary' href='update.php?id=$id'>Edit or Read</a> 
                                                <a class='btn btn-danger' href='delete.php?id=$id'>Delete</a>
                                            </td>
                                        </tr>";
                                }
                            }
                        ?>

                    </tbody>
                </table>

         </div>
        </div>
    </div>

</body>

</html>
