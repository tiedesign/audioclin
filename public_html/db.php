<?php
$con=mysqli_connect("audioclinrs.com.br","aclinrs_webmail","tdwm","aclinrs_webmail");
//$con=mysqli_connect("192.185.215.181","aclinrs_webmail","tdwm","aclinrs_webmail");


// Check connection
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

mysqli_close($con);
?> 
