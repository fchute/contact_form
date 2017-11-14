<?php

$username =$_POST['username'];
$username = mysqli_real_escape_string($connection, $username);

$password =$_POST['password'];
$password = mysqli_real_escape_string($connection,$password);

$hashFormat= "$2y$10$";

$salt = "iusesomecrazystrings22";

$hashF_and_salt = $hashFormat . $salt;

$password = crypt($password, $hashF_and_salt);


$name =$_POST['name'];
$name = mysqli_real_escape_string($connection, $name);

$address =$_POST['address'];
$address = mysqli_real_escape_string($connection, $address);

$state =$_POST['state'];
$state = mysqli_real_escape_string($connection, $state);

$phone = $_POST['phone'];
$phone = mysqli_real_escape_string($connection, $phone);

 ?>
