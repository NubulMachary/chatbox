<?php
    require '../core/db.php';
    require '../core/session.php';
    $user_id="";
    $session = $_SESSION['username'];
    $table_name = $_GET['connection'];

    if(isset($session)===false){

         header("location:../core/error.php");

    }

      $query = mysqli_query($conn, "SELECT * FROM users WHERE username='$session'");
      $array = mysqli_fetch_array($query);
      if (!empty($_POST)===true) {

        $message=$_POST['message'];
        $pattern = "#[\\~\\!\\@\\#\\$\\%\\^\\&\\*\\(\\)\\_\\-\\+\\=\\{\\}\\[\\]\\|\\:\\;\\&lt;\\&gt;\\/\\]+#";
        if(preg_match($pattern, $message)){

          echo "Yo mother fucker don't try this shit";

        }else{
          $query2= mysqli_query($conn, "INSERT INTO $table_name (id,username,msg,time_) VALUES('$user_id','$session','$message',NOW())"  );

        }
      }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/custom.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquer‌​y.min.js"></script>

    <title>Chat place</title>
</head>
<body>


  <div class="col-md-6 offset-md-3">
    <div class="head_color">

        <div class="row">
          <div class="col-4">
            <a class="back" href="index.php">
            <svg fill="#68706b" height="40" viewBox="0 0 24 24" width="40" xmlns="http://www.w3.org/2000/svg">
                <path d="M15.41 16.09l-4.58-4.59 4.58-4.59L14 5.5l-6 6 6 6z"/>
                <path d="M0-.5h24v24H0z" fill="none"/>
            </svg>
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



<!-- Signed in Status div-->


    <div class="signed_in text-center">
          Signed in as <b style="text-transform: capitalize;"><?php echo $array['username']; ?></b>
          <br>
  <a class="preload" href="chatbox2.php?connection=<?php echo $table_name; ?>">

    <svg fill="#000000" height="40" viewBox="0 0 24 24" width="40" xmlns="http://www.w3.org/2000/svg">
        <path d="M0 0h24v24H0z" fill="none"/>
        <path d="M12 5V1L7 6l5 5V7c3.31 0 6 2.69 6 6s-2.69 6-6 6-6-2.69-6-6H4c0 4.42 3.58 8 8 8s8-3.58 8-8-3.58-8-8-8z"/>
    </svg>
  </a>

  </div>

<!-- Input BOX -->

<div class="message_box">
  <form method="post">

    <input class="form-control" type="text" name="message" placeholder="Type Your Message Here" required>

    <button type="submit" class="send">Send</button>

 </form>
</div>

</div>

</div>
    <div class="col-md-6 offset-md-3">

      <div id="show">

       </div>
       <?php
      /* $query1 = mysqli_query($conn, "SELECT * FROM $table_name ORDER BY id DESC");
       while ($array5=mysqli_fetch_array($query1)) {
          echo $array5['msg'];
       } */
        ?>


    </div>
<!-- Start Of Back to TOP Button -->
    <a href="#" class="scrollToTop">

<svg fill="#000000" height="48" viewBox="0 0 24 24" width="48" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0V0z" fill="none"/>
    <path d="M4 12l1.41 1.41L11 7.83V20h2V7.83l5.58 5.59L20 12l-8-8-8 8z"/>
</svg>
    </a>
  <!-- End here -->

</body>
<?php require '../core/script.php'?>
<script src="../files/js/jquery.min.js" charset="utf-8"></script>
<script>

  $(document).ready(function(){
    setInterval(function(){
      $('#show').load('load.php?table_name=<?php echo $table_name; ?>')
    },1000);

  });



</script>
<!--  Move to top Button-->
<script type="text/javascript">
$(document).ready(function(){

//Check to see if the window is top if not then display button
$(window).scroll(function(){
  if ($(this).scrollTop() > 100) {
    $('.scrollToTop').fadeIn();
  } else {
    $('.scrollToTop').fadeOut();
  }

});

//Click event to scroll to top
$('.scrollToTop').click(function(){
  $('html, body').animate({scrollTop : 0},800);
  return false;
});

});
</script>

</html>
<a name="bottom" id="bottom"></a>
