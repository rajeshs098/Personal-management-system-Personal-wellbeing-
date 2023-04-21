<?php include('NAV.php') ?>
<?php
    $id = $_GET["id"];
    $sql = "DELETE FROM notes WHERE id=$id";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if ($db->query($sql) === TRUE) {
            
            header("Location: create.php");
            die();
        } else {
            echo "Error deleting record: " . $db->error;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Delete</title>
    <link rel="stylesheet" href="assets/css/bootstrap/bootstrap.min.css">
</head>
<style>
    body{
        background: #E8DFE0;
    }
    </style>
<body>


    <div class="container">
        <div class="row pt-3">
            <div class="col">
                <div class="card">
                    <h1 class="card-title text-center">Are you sure you want to delete this note?</h5>
                        <div class="card-body">
                            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])."?id=$id"; ?>" method="post">
                                <div class="d-grid gap-2 pt-4">
                                    <button class="btn btn-danger" type="submit">Yes</button>
                                    <a href="create.php" class="btn btn-secondary">No</a>
                                </div>
                            </form>
                        </div>
                </div>
            </div>
        </div>
    </div>

</body>


</html>
