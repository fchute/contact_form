<?php

include 'Includes\authenticate.php';


include 'Includes\DB_Config.php';


include 'Includes\Fetch_Full_Info.php';


?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Doc</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

    <style>
    table {
      margin: 0px auto;

    }

    th, td {
        padding: 8px;
        text-align: left;
        white-space: nowrap;

    }
    </style>
  </head>
  <body>


<div class="container">

      <div class="row" >



      <div class="" style="   float:left; display:inline;">

        <h3>Welcome, <?php echo $_SESSION['username']; ?>!</h3>
      </div>


    <div class="" style="   float:left; display:inline;">

    <a href="logout.php" class="btn btn-primary btn-md active" role="button" style="margin:10px;">Logout</a>
    </div>


      <div class="" style="   float:left; display:inline;">

        <a href="State_Directory.php" class="btn btn-primary btn-md active" role="button" style="margin:10px;">State user directory</a>
      </div>


      <div class="" style="   float:left; display:inline;">

        <a href="User_Page.php" class="btn btn-primary btn-md active" role="button" style="margin:10px;"><?php echo $_SESSION['username']; ?></a>
      </div>



      </div>
</div>
    <br>
    <br>
    <br>


<div class="container">

    <h2 class="text-center">Full Directory</h2>

    <table style="text-align: left;">
    <tr><th>Id</th><th>Username</th><th>Name</th><th>Address</th><th>State</th><th>Phone</th><th>State ID </th></tr>

<?php
// while ($row= mysqli_fetch_row($result)) {
//   # code...
//   print_r($row);
// }
while ($row= mysqli_fetch_assoc($result)) {
 # code...




 echo "<tr>";
 echo "<td>" . $row['id'] . "</td>";
 echo "<td>" . $row['username'] . "</td>";
 echo "<td>" . $row['name'] . "</td>";
 echo "<td>" . $row['address'] . "</td>";
 echo "<td>" . $row['state'] . "</td>";
 echo "<td>" . $row['phone'] . "</td>";
  echo "<td>" . $row['stateid'] . "</td>";
 echo "</tr>";
 // print_r($row);


}


?>

</div>
</table>

      </div>
  </body>
</html>
