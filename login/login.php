<?php
    require '../core/db.php';
    require '../core/session.php';
    $msg = "";

    if(empty($_POST)===false){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $query = mysqli_query($conn,"SELECT * FROM users WHERE username = '$username' and password = '$password'");
        $count=mysqli_num_rows($query);

        if($count==1){
            $array= mysqli_fetch_array($query);
            $_SESSION['username'] = $_REQUEST['username'];

       		header("Location: index.php");
        }else{
            $msg = "Username or Password is Incorrect";
        }

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../css/custom.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
</head>
<body>
    <div class="col-md-12">

    <div class="login_pannel">
        <div>
            <h1>Login Pannel</h1>
        </div>
        <div class="col-sm-12">
        <?php echo $msg;?><br><br>
        <form method="POST">


            <input class="input" type="text" name="username" placeholder='Username' required><br>
            <input class="input" type="password" name="password" placeholder='Password' required><br>
            <input class="submit" type="submit" name="submit" value="Login">
        </form>
        </div>
    </div>

    </div>
</body>
<?php require '../core/script.php'?>
</html>
