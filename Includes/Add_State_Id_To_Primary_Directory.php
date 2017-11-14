<?php

$query = "SELECT id FROM ".$state." WHERE username = '$username'";


     $id_get = mysqli_query($connection, $query);


     if (!$id_get) {
       # code...
     die("Query FAILED" . mysqli_error($connection)) ;
     }


     $id = mysqli_fetch_array($id_get);

     $id=$id['id'];


 $query = "UPDATE list SET stateid = '$id' WHERE username = '$username'";


     $result = mysqli_query($connection, $query);

     if (!$result) {
       # code...
     die("Query FAILED 2here" . mysqli_error($connection)) ;
     }


 ?>
