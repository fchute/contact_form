<?php


$query = "SELECT id, username, name, address, state, phone, stateid FROM list";



$result = mysqli_query($connection, $query);

if (!$result) {
  # code...
die("Query FAILED" . mysqli_error()) ;
}




 ?>
