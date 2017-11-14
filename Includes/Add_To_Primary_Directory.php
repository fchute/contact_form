<?php





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
      $query= ( "CREATE TABLE list ( id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, username VARCHAR(30) UNIQUE NOT NULL, password VARCHAR(200) NOT NULL, name VARCHAR(30) NOT NULL, address VARCHAR(30) NOT NULL, state VARCHAR(30) NOT NULL, phone VARCHAR(30) NOT NULL, stateid VARCHAR(30) )");

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


 ?>
