<?php
    require '../core/db.php';
    require '../core/session.php';

    $session = $_SESSION['username'];

      $query = mysqli_query($conn, "SELECT * FROM users WHERE username='$session'");
      $array = mysqli_fetch_array($query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/custom.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    <div class="col-md-6 offset-md-3">

        <div class="headings">
          <div class="row">

          <div class="col-4">
asdfasdfasdf
          </div>
          <div class="col-4 text-center">
              <h3><?php echo $array['username']; ?></h3>
          </div>
          <div class="col-4 text-right">
            <div class="dropdown">
  <a class=" dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

<svg fill="#000000" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"/>
    <path d="M12 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"/>
</svg>
</a>
  <div class="dropdown-menu text-left" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
  </div>
</div>

          </div>

        </div>

      </div>
        <div class="mid">
            <?php
               $query1 = mysqli_query($conn, "SELECT * FROM user_msgs");
               while($array=mysqli_fetch_array($query1)){
                 echo "<div class='single_msg'>";
                 echo $array['msg'];
                 echo "<br>" .$array['time_'];
                 echo "</div>";
               }
             ?>
        </div>
        <div class="footings">
        <!--div class="row">
            <div class="col-md-10">
                    <input class='form-control msg' type="text" name="messsage" placeholder="Type your Message Here">

            </div>
            <div class="col-md-2">
                <input class="send" type="submit" name="send" value="Send">
            </div>

        </div-->
        <div class="row">
              <div class="col-10 col-xs-10">
              <input class='form-control msg' type="text" name="messsage" placeholder="Type your Message Here">
              </div>

              <div class="col-2 col-xs-2">
              <input class="send" type="submit" name="send" value="Send">   </div>
          </div>

        </div>


    </div>

</body>
<?php require '../core/script.php'?>

<script>
	window.scrollTo(0,document.body.scrollHeight);

	window.addEventListener('load', function() {
		 window.scrollTo(0,document.body.scrollHeight);
	 });

</script>

</html>
