
      <?php
      $table_name=$_GET['table_name'];
      require '../core/db.php';
      require '../core/session.php';
      $user_id="";
      $session = $_SESSION['username'];

        $query = mysqli_query($conn, "SELECT * FROM users WHERE username='$session'");
        $array = mysqli_fetch_array($query);

         $query1 = mysqli_query($conn, "SELECT * FROM $table_name ORDER BY id DESC");
         $count = mysqli_num_rows($query1);
         if($count===0){
           echo "<div class='text-center' style='margin-top:50px;font-weight:bolder;'>Start Conversation Now</div>";
         }else {

           while($array=mysqli_fetch_array($query1)){
             if ($session===$array['username']) {
               $str = $array['time_'];
               echo "<div class='single_msg_right'><span style=' text-transform:capitalize;font-weight:bolder;color:#5d6066;'>You:</span> <span style='font-size:14px;'>";
               echo $array['msg'];
               echo "</span><br><span style='font-size:10px;'>" .date('h:m A, s\s\e\c , l - d M Y', strtotime($str));
               echo "</span></div>";
             }else{
               $str = $array['time_'];
               echo "<div class='single_msg'><span style=' text-transform:capitalize;font-weight:bolder;color:#5d6066;'>".$array['username']. ":</span> <span style='font-size:14px;'>";
               echo $array['msg'];
               echo "</span><br><span style='font-size:10px;'>" .date('h:m A, s\s\e\c , l - d M Y', strtotime($str));
               echo "</span></div>";
             }
           }
         }
       ?>
