<?php

include 'DB_Config.php';
include 'testinclude2.php';


$state="al";
$test="contact";

  $query = "SHOW TABLES IN ".$database." WHERE Tables_in_".$database." = 'list'";
  $result = mysqli_query($connection, $query);
  $rows = mysqli_num_rows($result);

  echo $rows;

 ?>
