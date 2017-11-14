<?php

// Getting state from list table
$username =  $_SESSION['username'];


$query = "SELECT state FROM list WHERE username = '$username'";


$state_get = mysqli_query($connection, $query);


if (!$state_get) {
  # code...
die("Query FAILED" . mysqli_error($connection)) ;
}


$state = mysqli_fetch_array($state_get);

$state=$state['state'];
// Getting state from list table



$query = "SELECT id, username, name, address, state, phone FROM $state";




$result = mysqli_query($connection, $query);

if (!$result) {
  # code...
die("Query FAILED" . mysqli_error($connection)) ;
}


 ?>
