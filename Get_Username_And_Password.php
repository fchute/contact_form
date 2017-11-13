<?php

$username =  $_POST['username'];
$password =  $_POST['password'];

$username = mysqli_real_escape_string($connection, $username);
$password = mysqli_real_escape_string($connection,$password);

$hashFormat= "$2y$10$";

$salt = "iusesomecrazystrings22";

$hashF_and_salt = $hashFormat . $salt;

$password = crypt($password, $hashF_and_salt);

 ?>
