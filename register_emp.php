<?php
session_start();
require 'connect.php';
if(@$_SESSION['emp_com']){
	?>
<script type="text/javascript">window.location.replace('employer_home.php');</script>
<?php
}
$user=@mysqli_real_escape_string($conn, $_REQUEST['euser']);
$password=@mysqli_real_escape_string($conn, $_REQUEST['epass']);
$email=@mysqli_real_escape_string($conn, $_REQUEST['eemail']);
$company=@mysqli_real_escape_string($conn, $_REQUEST['ecompany']);
$rpass = password_hash($password, PASSWORD_DEFAULT);
$query1="SELECT * FROM employer_login WHERE email='$email'";
$query_run1=mysqli_query($conn,$query1);

if(@mysqli_num_rows($query_run1)>0)
{
 echo "<script type='text/javascript'>
            alert('Email already Exist')
            window.location.replace('user_register.php');
            </script>";
}

else{
	
$query="insert into employer_login values(' ','$user','$rpass','$email','$company')";
$query_run=@mysqli_query($conn,$query);

$_SESSION['emp_com']=$company;

setcookie('emp_com',$email,time()+60*60*7,"/");
	header('location: employer_home.php');	
}

 echo "<script type='text/javascript'>
 alert('Some Error!!');
            window.location.replace('user_register.php');
            </script>";
@mysqli_close($conn);

?>