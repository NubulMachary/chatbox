<?php
error_reporting(0);
   $servername = "localhost";
   $username = "root";
   $password = "";

   try {
       $conn = new PDO("mysql:host=$servername;dbname=chat", $username, $password);
       $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       echo"done";
       }
   catch(PDOException $e)
       {
       echo "Connection failed: " . $e->getMessage();
       die();
       }

if (!empty($_POST)) {
$msg = $_POST['body'];
if(empty($msg)){
    echo "Write Somthing ! ";
}else{
    $username ="xxx";
    $sql = "INSERT INTO user_msgs (`id`, `username`, `msg`, `time_`) VALUES (:id,:username,:msg,:time_)" ;
    $query = $conn->prepare($sql);
    $query->execute(array(
                 ':id' => $id,
                 ':username' => $username,
                 ':msg' => $msg,
                 ':time_' => $time_,
    ));
}
}

?>
<!doctype html>
<html lang="en">
  <head>
    <title>Hello, world!</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  </head>
  <body>

    <div class="container">

        <div class="">
        <?php
                class viewMsg{
                            public $id,$msg,$time_;
                    }
                    $query_second = $conn->query("SELECT * FROM user_msgs");
                $query_second->setFetchMode(PDO::FETCH_CLASS, 'viewMsg');
                while($r = $query_second->fetch()){
                    $id = $r->id;

                    $username = $r->username;
                    $msg = $r->msg;
                    $time_ = $r->time_;

    ?>
    <div>
        <?php echo "<div class='jumbotron'>".$msg."<br><small>".$username." - ".$time_."</small> </div><br><hr><br>"; ?>
    </div>
    <?php

    }
?>
        </div>

        <form action="" method="post">

            <input type="text" name="body" placeholder="msg" class="form-control">

        </form>


    </div>


  </body>
  </html>
