<?php
session_start();


include 'DB_Config.php';
if(isset($_POST['submit'])){




$username =  $_POST['username'];
$password =  $_POST['password'];

$username = mysqli_real_escape_string($connection, $username);
$password = mysqli_real_escape_string($connection,$password);

$hashFormat= "$2y$10$";

$salt = "iusesomecrazystrings22";

$hashF_and_salt = $hashFormat . $salt;

$password = crypt($password, $hashF_and_salt);

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

}
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Doc</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

  </head>
  <body>

        <div class="container">
          <div class="col-sm-6">
              <form action="" method="post">


                <label for="username">Username</label>
                <div class="form-group">
                  <input type="text" name="username" class="form-control">
                </div>

                <label for="password">Password</label>
                <div class="form-group">
                  <input type="password" name="password" value="" class="form-control">
                </div>
              <input type="submit" name="submit" value="Submit" class="btn btn-primary">

              </form>
              <br>

              <form method="GET" action="Register.php">
                  <input type="submit" value="Register" class="btn btn-primary"/>
              </form>

          </div>
        </div>


  </body>
</html>
