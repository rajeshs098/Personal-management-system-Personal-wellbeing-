<?php include 'filesLogic.php';?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="file/filestyle.css">
  <title>Download files</title>
</head>
<body style="background-image: radial-gradient(circle farthest-side,#E8DFE0,#a78b85);">
<h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; your files : click download button to save file offline</a>
<table>
<thead>
   
    <th>Filename</th>
    <th>size (in mb)</th>
    
    <th>Action
    </th>
</thead>
<tbody>
  <?php foreach ($files as $file): ?>
    <tr>
      
      <td><?php echo $file['name']; ?></td>
      <td><?php echo floor($file['size'] / 1000) . ' KB'; ?></td>
      
      <td><a href="downloads.php?file_id=<?php echo $file['id'] ?>">Download</a><br><br>
      &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <?php echo "<a href='?delete=" . $file['id'] . "'>Delete</a>";?></td>
  
    </tr>
   
  <?php endforeach;?>
  <?php
// Check for delete request
if (isset($_GET['delete'])) {
  $id = mysqli_real_escape_string($db, $_GET['delete']);
  $sql = "DELETE FROM files WHERE id = $id";
  mysqli_query($db, $sql);
}
?>

</tbody>
</table>

</body>
</html>