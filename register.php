<?php

session_start();

include 'DB_Config.php';




    if(isset($_POST['submit']))
    {

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




        $query = "SHOW TABLES IN ".$database." WHERE Tables_in_".$database." = 'list'";

      $result = mysqli_query($connection, $query);
      if (!$result) {
        # code...
      die("Query FAILED" . mysqli_error($connection)) ;
    }
      $rows = mysqli_num_rows($result);

                  if ($rows) {

    $query = "INSERT INTO list(username,password,name,address,state,phone) ";
    $query .= "VALUE ('$username', '$password', '$name', '$address', '$state', '$phone')";


    $result = mysqli_query($connection, $query);

    if (!$result) {
      # code...
    die("Query FAILED" . mysqli_error($connection)) ;
  }

    }
    else {
      $query= ( "CREATE TABLE list ( id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, username VARCHAR(30) NOT NULL, password VARCHAR(200) NOT NULL, name VARCHAR(30) NOT NULL, address VARCHAR(30) NOT NULL, state VARCHAR(30) NOT NULL, phone VARCHAR(30) NOT NULL)");

      $result = mysqli_query($connection, $query);

      if (!$result) {
        # code...
      die("Query FAILED   here" . mysqli_error($connection)) ;
      }
      else {

            $query = "INSERT INTO list(username,password,name,address,state,phone) ";
            $query .= "VALUE ('$username', '$password', '$name', '$address', '$state', '$phone')";


            $result = mysqli_query($connection, $query);

            if (!$result) {
              # code...
            die("Query FAILED" . mysqli_error($connection)) ;
          }

      }
    }
}


    if(isset($_POST['submit']))
    {

    $username =$_POST['username'];
    $username = mysqli_real_escape_string($connection, $username);


    $name =$_POST['name'];
    $name = mysqli_real_escape_string($connection, $name);

    $address =$_POST['address'];
    $address = mysqli_real_escape_string($connection, $address);

    $state =$_POST['state'];
    $state = mysqli_real_escape_string($connection, $state);

    $phone = $_POST['phone'];
    $phone = mysqli_real_escape_string($connection, $phone);


  $query = "SHOW TABLES IN ".$database." WHERE Tables_in_".$database." =  '$state'";

    $result = mysqli_query($connection, $query);
    if (!$result) {
      # code...
    die("Query FAILED" . mysqli_error($connection)) ;
  }
    $rows = mysqli_num_rows($result);

                if ($rows) {
                  # code...





                        $query = "INSERT INTO $state(username,name,address,state,phone) ";
                        $query .= "VALUE ('$username', '$name', '$address', '$state', '$phone')";


                        $result = mysqli_query($connection, $query);

                        if (!$result) {
                          # code...
                        die("Query FAILED here" . mysqli_error($connection)) ;
                        }
                        else {

                        header("Location: User_Page.php");

                        }

                }

                else {
                  $query= ( "CREATE TABLE ".$state." ( id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, username VARCHAR(30) NOT NULL, password VARCHAR(200) NOT NULL, name VARCHAR(30) NOT NULL, address VARCHAR(30) NOT NULL, state VARCHAR(30) NOT NULL, phone VARCHAR(30) NOT NULL)");

                  $result = mysqli_query($connection, $query);

                  if (!$result) {
                    # code...
                  die("Query FAILED   here" . mysqli_error($connection)) ;
                  }
                  else {
                  $query = "INSERT INTO ".$state." (username,name,address,state,phone) ";
                  $query .= "VALUE ('$username', '$name', '$address', '$state', '$phone')";


                  $result = mysqli_query($connection, $query);

                  if (!$result) {
                    # code...
                  die("Query FAILED 2here" . mysqli_error($connection)) ;
                  }
                  else {
                  header("Location: User_Page.php");

                  }
                }
                }


  }







    # code...
  //   if ($username && $password) {
  // }
  //
  // else {
  //   echo "fill out fields";
  // }
  // echo "$username" . "$password";
  // }





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
  <div class="row">


  <h2>Register an account</h1>
    <p style="margin:10px;">or</p>
    <form method="GET" action="login.php">
        <input type="submit" value="Login" class="btn btn-primary"/>
    </form>
    </div>
</div>

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
<label for="name">First and Last Name</label>
<div class="form-group">
  <input type="text" name="name" value="" class="form-control">
</div>

<label for="state">State</label>
<div class="form-group">
  <select type="text" name="state" value="" class="form-control">
    <option value="AL">Alabama</option>
    	<option value="AK">Alaska</option>
    	<option value="AZ">Arizona</option>
    	<option value="AR">Arkansas</option>
    	<option value="CA">California</option>
    	<option value="CO">Colorado</option>
    	<option value="CT">Connecticut</option>
    	<option value="DE">Delaware</option>
    	<option value="DC">District Of Columbia</option>
    	<option value="FL">Florida</option>
    	<option value="GA">Georgia</option>
    	<option value="HI">Hawaii</option>
    	<option value="ID">Idaho</option>
    	<option value="IL">Illinois</option>
    	<option value="IN">Indiana</option>
    	<option value="IA">Iowa</option>
    	<option value="KS">Kansas</option>
    	<option value="KY">Kentucky</option>
    	<option value="LA">Louisiana</option>
    	<option value="ME">Maine</option>
    	<option value="MD">Maryland</option>
    	<option value="MA">Massachusetts</option>
    	<option value="MI">Michigan</option>
    	<option value="MN">Minnesota</option>
    	<option value="MS">Mississippi</option>
    	<option value="MO">Missouri</option>
    	<option value="MT">Montana</option>
    	<option value="NE">Nebraska</option>
    	<option value="NV">Nevada</option>
    	<option value="NH">New Hampshire</option>
    	<option value="NJ">New Jersey</option>
    	<option value="NM">New Mexico</option>
    	<option value="NY">New York</option>
    	<option value="NC">North Carolina</option>
    	<option value="ND">North Dakota</option>
    	<option value="OH">Ohio</option>
    	<option value="OK">Oklahoma</option>
    	<option value="OR">Oregon</option>
    	<option value="PA">Pennsylvania</option>
    	<option value="RI">Rhode Island</option>
    	<option value="SC">South Carolina</option>
    	<option value="SD">South Dakota</option>
    	<option value="TN">Tennessee</option>
    	<option value="TX">Texas</option>
    	<option value="UT">Utah</option>
    	<option value="VT">Vermont</option>
    	<option value="VA">Virginia</option>
    	<option value="WA">Washington</option>
    	<option value="WV">West Virginia</option>
    	<option value="WI">Wisconsin</option>
    	<option value="WY">Wyoming</option>

  </select>
</div>


<label for="address">Address</label>
<div class="form-group">
  <input type="text" name="address" value="" class="form-control">
</div>


<label for="phone">Phone</label>
<div class="form-group">
  <input type="phone" name="phone" value="" class="form-control">
</div>




      <input type="submit" name="submit" value="Submit" class="btn btn-primary">

          </form>


      </div>
    </div>

  </body>
</html>
