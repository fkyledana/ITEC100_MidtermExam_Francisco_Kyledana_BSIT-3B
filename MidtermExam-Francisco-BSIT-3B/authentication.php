<!DOCTYPE html>
<html>
<head>
	<title>Authentication</title>
	  <link href="authentication1.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<?php include 'process.php';?>
<body>
    <form method="post" action="">

	<div class="box1">
    <center><h2> Verification </h2></center>
    <div class="inputBox">
      <?php 

                      $phpvar="300"; 
                      ?> 
                      <script>
                      function countDown(secs,elem) {
                      var element = document.getElementById(elem);
                      element.innerHTML = "Timer: "+secs+" seconds";
                      if(secs < 1) {
                      clearTimeout(timer);
                      element.innerHTML = '<h2>Ended</h2>';
                      element.innerHTML += '<a href="try.php">Reset</a>';
                      $("#btn-submit").attr("disabled", true);
                      }
                      secs--;
                      var timer = setTimeout('countDown('+secs+',"'+elem+'")',1000);
                      }
                      </script>
                      <div id="status"style="font-size:20px;"></div>
                      <script>countDown(<?php echo $phpvar; ?>,"status");</script>

      <input type="text" name="code" class="Input" placeholder="Enter Authentication Code" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" />
      <label> Authentication Code:</label>
      <input type = "text" class = "text" name="code1" value = "<?php 
      $rand = rand(100000,999999);
      echo $rand;
    
    ?>"> 
    </div>
        <center><input type="submit" name="submit" value="SUBMIT"></center>
        <br>
</div>
</form>
</body>
</html>