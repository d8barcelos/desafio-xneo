<?php
   include '../includes/config.php';

  $sql = "SELECT * FROM demo";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
?>

<li><p><?php echo $row['txt']; ?></p> 
<div class="container-btn">
<button class="edit-btn" data-id="<?php echo $row['id']; ?>"><i class="fa fa-pencil"></i></button>
<button id="delete" data-id="<?php echo $row['id']; ?>"><i class="fa fa-trash"></i></button>
</li>
</div>

<?php } } else { echo "<div style='text-align:center;'>Sem tarefas registradas</div>"; } ?>


