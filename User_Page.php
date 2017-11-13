

<?php include 'authenticate.php'; ?>



<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

    <title>Document</title>
  </head>
  <body>
    <div class="container">



 <h3>Welcome, <?php echo $_SESSION['username']; ?>!</h3>
<div style="width:200%;     text-align: center;">

<div class="" style="   float:left; display:inline;">

  <a href="logout.php" class="btn btn-primary btn-md active" role="button" style="margin:10px;">Logout</a>
</div>
<div class="" style="   float:left; display:inline;">

    <a href="Complete_Directory.php" class="btn btn-primary btn-md active" role="button" style="margin:10px;">Complete User Directory</a>
  </div>

    <div class="" style="   float:left; display:inline;">

      <a href="State_Directory.php" class="btn btn-primary btn-md active" role="button" style="margin:10px;">State user directory</a>
    </div>

</div>



      </div>

  </body>
</html>
