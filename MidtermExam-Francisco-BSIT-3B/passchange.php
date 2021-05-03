<?php
$con = mysqli_connect("localhost","root","");
mysqli_select_db($con,"users");
?>
<!DOCTYPE html>
<html>
<head>
  <title> </title>
  <link rel = "stylesheet" href = "changepass1.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
  <script type="text/javascript" src="passwordvisible.js"></script>
</head>
<?php include 'process.php' ?>
<body>
  <div class="login-page">
  <div class="form">
  <div class="box">
  <h2> Reset Password </h2>
  <form class="login-form" method="post">
  <div class="inputBox">
      <label> Enter Username: </label>
      <input type="text" name="user" class="Input" required>
  </div>
  <div class="inputBox">
      <label> Enter Old Password: </label>
      <input type="password" name="old" class="Input" required>
  </div>
  <div class="inputBox">
      <label> Enter New Password: </label>
      <input type="password" name = "new" class="Input" id="password-field" required>
      <i class="far fa-eye" id="togglePassword" aria-hidden="true" onClick="viewPassword()"></i>
  </div>
  <div class="inputBox">
      <label> Confirm Password: </label>
      <input type="password" name = "cpwd" class="Input" id="password-field1" required>
      <i class="far fa-eye" id="togglePassword1" aria-hidden="true" onClick="viewPassword1()"></i>
  <center><input type="submit" name="change" value="Change Password"></center>
  <br>
  <center> Not yet registered? <a href = "register.php"> Register here.</a> </center>
    </form>
  </div>
</div>
</body>
</html>