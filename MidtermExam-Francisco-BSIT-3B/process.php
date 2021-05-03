
<!-----------------------------------------LOGIN-------------------------------------------------------->
<?php session_start();
$error = NULL;


if(isset($_POST['login'])){
$n1=$_POST['user'];
$n2=$_POST['pass'];
$act = "Logged in";

$con = NEW MySQLi('Localhost','root','','users');

$tb1="SELECT * FROM `admin` WHERE `username` = '".$n1."' and `password` = '".$n2."'";
if($result=mysqli_query($con,$tb1)){
  $check = mysqli_num_rows($result);
}
if($check>0){
  header ('Location: ActLogs.php');
  echo '<script> alert("Login Successful")</script>';
}

$tb2="SELECT * FROM `accounts` WHERE `user` = '".$n1."' and `pass` = '".$n2."'";

if($result1 =mysqli_query($con,$tb2)){
  $check1 = mysqli_num_rows($result1);
  $row = mysqli_fetch_array($result1);
}
if($check1>0){
  $query = "INSERT INTO logs(user,activity) values ('$n1','$act')";
  $resultset = mysqli_query($con, $query);
  header ('Location: authentication.php');
  $_SESSION['user'] = $n1;
  $_SESSION['pass'] = $n2;
  
}

else{
  echo '<script>alert("Login Failed")</script>'; 
}
}
?>
<!-----------------------------------------LOGOUT-------------------------------------------------------->


<?php
if(isset($_POST['logout']))
{
  $hostname = "localhost";
  $username = "root";
  $password = "";
  $dbname = "users";

  $connect = mysqli_connect($hostname, $username, $password, $dbname);

  $y = $_SESSION['user'];
  $act = "Logged Out";
    
  $query = "INSERT INTO logs(user, activity) values ('$y','$act')";

  $result = mysqli_query($connect, $query);

  if($result)
  {
    header('Location: signin.php');
  }
  else
  {
    echo "Failed to Logout";

  }

  mysqli_close($connect);

}
?>

<!-----------------------------------------CHANGE PASSWORD-------------------------------------------------------->

<?php
if(isset($_POST['change'])){
  $user = $_POST['user'];
  $opwd = $_POST['old'];
  $conf = $_POST['cpwd'];
  $act = "Password Reset";
 
$tb2= "UPDATE accounts set pass = '$_POST[new]' where user = '$user'";
$tb1= "UPDATE authentication set pass = '$_POST[new]' where user = '$user'";


if(mysqli_query($con,$tb2)){
  if(mysqli_query($con,$tb1)){
  $query = "INSERT INTO logs(user,activity) values ('$user','$act')";
  $resultset = mysqli_query($con, $query);
  header ('Location: signin.php');
}
}
else{
  echo '<script>alert("Password Mismatched")</script>'; 
}

}
?>


<!-----------------------------------------AUTHENTICATION CODE-------------------------------------------------------->

<?php
if(isset($_POST['submit']))
{
  $hostname = "localhost";
  $username = "root";
  $password = "";
  $dbname = "users";

  $connect = mysqli_connect($hostname, $username, $password, $dbname);

  $y = $_SESSION['user'];
  $x = $_SESSION['pass'];
  $code = $_POST['code1'];
    
  if(($_POST['code'])==($_POST['code1'])){
  $stmt="INSERT INTO authentication (user,pass,ckey)VALUES('$y','$x','$code')";
  if(mysqli_query($connect,$stmt)){
  header("Location: homepage.php");   
}
}
else{
  echo '<script>alert("Wrong Authentication Code!")</script>';
}
}
?>