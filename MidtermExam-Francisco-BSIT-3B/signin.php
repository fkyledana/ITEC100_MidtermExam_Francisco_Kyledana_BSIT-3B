<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link href="login1.css" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
  <script type="text/javascript" src="passwordvisible.js"></script>
</head>
<?php include 'process.php' ?>
<body>
  <div class="box">
  <h2> WELCOME! </h2>
  <form class="login-form" method = "post">
  <div class="inputBox">
          <input type="text" name="user" class="Input" placeholder="Enter Username" required>
          </div>
  <div class="inputBox">
          <input type="password" name="pass" class="Input" placeholder="Enter Password" id="password-field" required>
          <i class="far fa-eye" id="togglePassword" aria-hidden="true" onClick="viewPassword()"></i>
          </div>
  <center><input type="submit" name="login" value="LOG IN"></center>
      <p> 
      <center> Not yet registered? <a href = "register.php"> Register here.</a> </center>
      </p>
      <p> 
      <center> <a href = "passchange.php"> Forgot Password? </a></center>
      </p>
    </form>
  </div>
</body>
</html>
