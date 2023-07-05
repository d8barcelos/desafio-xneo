<?php
   include './includes/config.php';

  $sql = "SELECT * FROM demo";
  $result = mysqli_query($conn, $sql);

  $count = mysqli_num_rows($result);
?>

Total de tarefas <span><?php echo $count; ?></span>
