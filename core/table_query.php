<?php
  require 'db.php';
  require 'session.php';
  $session_name = $_SESSION['username'];
  $sendingto = $_GET['sendingto'];
  echo $sendingto;
  echo "Querry";
  $table_name= $session_name."_".$sendingto;
  $reverse_table_name = $sendingto."_".$session_name;
  echo "<br>table name: ".$table_name;
  echo " <br> ";
  echo  "reverse_table_name: ".$reverse_table_name;

$query1=mysqli_query($conn,"SELECT * FROM $table_name");
$query2=mysqli_query($conn,"SELECT * FROM $reverse_table_name");

if ($query1) {
  echo "<script>location='../login/chatbox2.php?connection=".$table_name."'</script>";


}
elseif ($query2) {
    echo "<script>location='../login/chatbox2.php?connection=".$reverse_table_name."'</script>";
  /*header('Location: ../login/chatbox2.php?connection='.$reverse_table_name); */
  exit();
}
else {
  mysqli_query($conn,"CREATE TABLE `$table_name` (
    `id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
    `username` VARCHAR(60) NOT NULL,
    `msg` VARCHAR(500) NOT NULL,
    `time_` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (`id`)
  ) ENGINE=INNODB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;");

  header('Location: ../login/chatbox2.php?connection='.$table_name);

}
/*
$query1=mysqli_query($conn,"SELECT * FROM $reverse_table_name")or die(mysql_error());
if ($query1) {
  while($array=mysqli_fetch_array($query1)){
    echo $array['msg']."<br>";
  }
}else{
  $query2=mysqli_query($conn,"SELECT * FROM $table_name")or die(mysql_error());
  while($array2=mysqli_fetch_array($query2)){
    echo $array2['msg']."<br>";
}
}
*/

/*
mysqli_query($conn,"CREATE TABLE `$table_name` (
  `id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(60) NOT NULL,
  `msg` VARCHAR(500) NOT NULL,
  `time_` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=INNODB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;");

header('Location: ../login/chatbox2.php?connection='.$table_name);
 ?>
*/
?>
