<?php
$mysql_host="localhost";
$mysql_user="isha";
$mysql_password="ishika@123";
$conn=@mysqli_connect($mysql_host,$mysql_user,$mysql_password);

@mysqli_select_db($conn,"internshala");

?>


