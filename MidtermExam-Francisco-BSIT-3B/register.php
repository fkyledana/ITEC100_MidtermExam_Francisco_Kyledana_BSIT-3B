<?php
$con = mysqli_connect("localhost","root","");
mysqli_select_db($con,"users");
?>
<!DOCTYPE html>
<html>
<head>
  <title>Sign Up</title>
  <link href="reg1.css" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
  <script type="text/javascript" src="passwordvisible.js"></script>
</head>
<body>
  <div class="box">
    <h2>SIGN UP</h2>
    <h4> Please fill up the following: </h4>
  <?php include 'process.php';?>
  <form method="post" action="" name="signup-form">
    <div class="inputBox">
      <label>Username:</label>
      <input type="text" name="username" class="Input" required>
    </div>
    <div class="inputBox">
      <label>Email:</label>
      <input type="email" name="email" class="Input" required>
    </div>
    <div class="inputBox">
      <label>Password:</label>
      <input type="password" name="password" class="Input" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one(1) number and one(1) uppercase and lowercase letter, and at least 8 or more characters" id="password-field" required>
      <i class="far fa-eye" id="togglePassword" aria-hidden="true" onClick="viewPassword()"></i>
    </div>
    <div class="inputBox">
      <label>Confirm Password:</label>
      <input type="password" name="password1" class="Input" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one(1) number and one(1) uppercase and lowercase letter, and at least 8 or more characters" id="password-field1" required>
      <i class="far fa-eye" id="togglePassword1" aria-hidden="true" onClick="viewPassword1()"></i>
    </div>
    <div class="inputBox">
      <center><button type="submit" name="reg_user" > Register</center></button>
    </div>
    <p>
     <center> Already registered? <a href="signin.php">Sign in here.</a></center>
    </p>
  </form>
</div>
<?php
if(isset($_POST['reg_user'])){
$n1=$_POST['username'];
$n2=$_POST['password'];
$n3=$_POST['email'];

if(($_POST['password'])==($_POST['password1'])){
  $stmt="INSERT INTO accounts (user,pass,email)VALUES('$n1','$n2','$n3')";
  if(mysqli_query($con,$stmt)){
  header("Location: signin.php");   
}
}
else{
  echo '<script>alert("Password did not match")</script>';
}
}
?>
</body>
</html>