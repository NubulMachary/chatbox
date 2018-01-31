<!DOCTYPE html>
<html lang="en">
<head>
  <title>ChatBOX</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

  <link rel="stylesheet" href="custom.css">

</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

      <a class="navbar-brand" href="#">ChatBOX</a>

    </div>
    <div class="collapse navbar-collapse" id="myNavbar">

      <ul class="nav navbar-nav navbar-right">


        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

      <form id="signin" class="navbar-form navbar-right" role="form">

                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input id="email" type="email" class="form-control" name="email" value="" placeholder="Email Address">
                        </div>

                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input id="password" type="password" class="form-control" name="password" value="" placeholder="Password">
                        </div>

                        <button type="submit" class="btn btn-primary">Login</button>
      </form>

          </div>
      </ul>
    </div>
  </div>
</nav>



<div>
<div class="container" >
    <div class="col-md-6" >

        <img class="image" src="../files/img/talking.jpg" alt="image">
    </div>
    <!--col-md-6-->
    <div class="col-md-6 offset-md-3">

      <div id="logbox"  >
          <form id="signup" method="post" action="/signup" >
              <h1>Create an Account</h1>
       <input name="user[email]" type="email" placeholder="Email address" class="input pass"/>
              <input name="user[password]" type="password" placeholder="Choose a password" required="required" class="input pass"/>
              <input name="user[password2]" type="password" placeholder="Confirm password" required="required" class="input pass"/>
              <input type="submit" value="Sign me up!" class="inputButton"/>

          </form>
      </div>
    </div>


</div>
</div>

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</html>
