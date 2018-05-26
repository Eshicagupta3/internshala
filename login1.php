<?php
session_start();
require 'connect.php';

$user=@mysqli_real_escape_string($conn, $_REQUEST['luser']);
$password=@mysqli_real_escape_string($conn, $_REQUEST['lpass']);
if($user=='')
{
header('location: index.php');
}

$query="SELECT * FROM employer_login WHERE  email='$user'";
$query_run=@mysqli_query($conn,$query);
if(@mysqli_num_rows($query_run)>0)
{

	   while($row=@mysqli_fetch_assoc($query_run)){
	  $hash=$row['password'];
	 
	   if(password_verify($password, $hash))
	   {
	   	

$_SESSION['emp_com']=$row['company'];
$company=$row['company'];
setcookie('emp_com',$user,time()+60*60*7,"/");
	header('location: employer_home.php');	
}

}}

//}
else
{

$query="SELECT * FROM user_login WHERE  email='$user'";
$query_run=@mysqli_query($conn,$query);
if(@mysqli_num_rows($query_run)>0)
{

	   while($row=@mysqli_fetch_assoc($query_run)){
	  $hash=$row['password'];
	 
	   if(password_verify($password, $hash))
	   {
	   	

$_SESSION['user_name']=$row['name'];
$_SESSION['user_id']=$row['id'];

setcookie('user_id',$user,time()+60*60*7,"/");
	header('location: index.php');	
}
}



}}
echo "<script type='text/javascript'>
            alert('user name or password incorrect');
            window.location.replace('user_register.php');
            </script>";
@mysqli_close($conn);

?>