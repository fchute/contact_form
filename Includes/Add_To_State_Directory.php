<?php


  $query = "SHOW TABLES IN ".$database." WHERE Tables_in_".$database." =  '$state'";

    $result = mysqli_query($connection, $query);
    if (!$result) {
      # code...
    die("Query FAILED" . mysqli_error($connection)) ;
  }
    $rows = mysqli_num_rows($result);

                if ($rows) {
                  # code...

                  $query = "SELECT id FROM list WHERE username = '$username'";


                                    $id_get = mysqli_query($connection, $query);


                                    if (!$id_get) {
                                      # code...
                                    die("Query FAILED" . mysqli_error($connection)) ;
                                    }


                                    $id = mysqli_fetch_array($id_get);

                                    $id=$id['id'];


                $query = "INSERT INTO ".$state." (username,name,address,state,phone, primaryID) ";
                $query .= "VALUE ('$username', '$name', '$address', '$state', '$phone', '$id')";


                        $result = mysqli_query($connection, $query);

                        if (!$result) {
                          # code...
                        die("Query FAILED here" . mysqli_error($connection)) ;
                        }


                        }


                else {
                  $query= ( "CREATE TABLE ".$state." ( id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, username VARCHAR(30) UNIQUE NOT NULL, password VARCHAR(200) NOT NULL, name VARCHAR(30) NOT NULL, address VARCHAR(30) NOT NULL, state VARCHAR(30) NOT NULL, phone VARCHAR(30) NOT NULL, primaryID VARCHAR(30) )");

                  $result = mysqli_query($connection, $query);

                  if (!$result) {
                    # code...
                  die("Query FAILED   here" . mysqli_error($connection)) ;
                  }
                  else {

                    $query = "SELECT id FROM list WHERE username = '$username'";


                                      $id_get = mysqli_query($connection, $query);


                                      if (!$id_get) {
                                        # code...
                                      die("Query FAILED" . mysqli_error($connection)) ;
                                      }


                                      $id = mysqli_fetch_array($id_get);

                                      $id=$id['id'];


                  $query = "INSERT INTO ".$state." (username,name,address,state,phone, primaryID) ";
                  $query .= "VALUE ('$username', '$name', '$address', '$state', '$phone', '$id')";


                  $result = mysqli_query($connection, $query);

                  if (!$result) {
                    # code...
                  die("Query FAILED 2here" . mysqli_error($connection)) ;
                }





                }
                }



 ?>
