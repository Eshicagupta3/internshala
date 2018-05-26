<?php
session_start();
require 'connect.php';
if(@$_SESSION['user_name']){
	?>
<script type="text/javascript">window.location.replace('employer_home.php');</script>
<?php
}
$user=@mysqli_real_escape_string($conn, $_REQUEST['ruser']);
$password=@mysqli_real_escape_string($conn, $_REQUEST['rpass']);
$email=@mysqli_real_escape_string($conn, $_REQUEST['remail']);

$rpass = password_hash($password, PASSWORD_DEFAULT);
$query1="SELECT * FROM user_login WHERE email='$email'";
$query_run1=mysqli_query($conn,$query1);

if(@mysqli_num_rows($query_run1)>0)
{
 echo "<script type='text/javascript'>
            alert('Email already Exist')
            window.location.replace('user_register.php');
            </script>";
}

else{
	
$query="insert into user_login values(' ','$user','$email','$rpass')";
$query_run=@mysqli_query($conn,$query);


}

$query="SELECT * FROM user_login WHERE  email='$email'";
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
}

 echo "<script type='text/javascript'>
 alert('Some Error!!');
            window.location.replace('user_register.php');
            </script>";
@mysqli_close($conn);

?>