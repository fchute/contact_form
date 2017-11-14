<?php
$query = "SELECT * FROM list WHERE username = '$username' AND password = '$password'";



$result = mysqli_query($connection, $query);
$rows = mysqli_num_rows($result);

if (!$result) {
  # code...
die("Query FAILED" . mysqli_error()) ;
}

elseif ($rows==1) {
  # code...
  $_SESSION['username'] = $username;
  header("Location: User_Page.php");

}
else{
  echo "username/password incorrect";
}


 ?>
