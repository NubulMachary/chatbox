<?php
    require '../core/db.php';
    require '../core/session.php';
    $user_id="";
    $session = strtolower($_SESSION['username']);
    if(isset($session)===false){

         header("location:../core/error.php");

    }

      $query = mysqli_query($conn, "SELECT * FROM users WHERE username='$session'");
      $array = mysqli_fetch_array($query);
      $query2 = mysqli_query($conn, "SELECT * FROM users");
      echo $array['userkey'];


?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/custom.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

    <title>Login HOme</title>
  </head>
  <body>
    <div class="col-md-6 offset-md-3">
      <div class="head_color">

          <div class="row">
            <div class="col-4">
  <a class="back" href="#">

  </a>
            </div>
            <div class="col-4 text-center">
              <h3><span style="color:#68706b;">Chat BOX</span></h3>
            </div>
            <div class="col-4 text-right">

      <a id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="menu" href="#">
  <svg fill="#68706b" height="40" viewBox="0 0 24 24" width="40" xmlns="http://www.w3.org/2000/svg">
      <path d="M0 0h24v24H0z" fill="none"/>
      <path d="M12 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"/>
  </svg>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item disabled" href="#">Action</a>
    <a class="dropdown-item disabled" href="#">Another action</a>
    <a class="dropdown-item" href="../core/logout.php">Logout</a>
  </div>
  </a>
            </div>

          </div>

        </div>
</div>


  <!-- Signed in Status div-->


      <div class="signed_in text-center">
            Signed in as <b style="text-transform: capitalize;"><?php echo $array['username']; ?></b>
            <br>
    <a class="preload" href="index.php">

      <svg fill="#000000" height="40" viewBox="0 0 24 24" width="40" xmlns="http://www.w3.org/2000/svg">
          <path d="M0 0h24v24H0z" fill="none"/>
          <path d="M12 5V1L7 6l5 5V7c3.31 0 6 2.69 6 6s-2.69 6-6 6-6-2.69-6-6H4c0 4.42 3.58 8 8 8s8-3.58 8-8-3.58-8-8-8z"/>
      </svg>
    </a>

    </div>
<div class="col-md-6 offset-md-3">
  <div class="bapu">
    <p class="text-center" style="color:#522c7c;">ALL Contacts List</p>

    <?php
      while ($array2=mysqli_fetch_array($query2)) {
        if ($array2['username']!=$session) {

            echo "<a href='../core/table_query.php?sendingto=".$array2['username']. "'><div class='contacts_list text-center' >";
            echo $array2['username'];
            echo "</div></a>";
        }
      }
     ?>
   </div>
</div>


  </body>
  <?php require '../core/script.php'?>

</html>
