<?php
session_start();
require 'connect.php';
if(@$_SESSION['emp_com']){
$company=$_SESSION['emp_com'];
$category=@mysqli_real_escape_string($conn, $_REQUEST['category']);
$location=@mysqli_real_escape_string($conn, $_REQUEST['location']);
$duration=@mysqli_real_escape_string($conn, $_REQUEST['duration']);

$stipend=@mysqli_real_escape_string($conn, $_REQUEST['stipend']);
$start=@mysqli_real_escape_string($conn, $_REQUEST['start']);
$posted=@mysqli_real_escape_string($conn, $_REQUEST['posted']);
$apply=@mysqli_real_escape_string($conn, $_REQUEST['apply']);
$desc=@mysqli_real_escape_string($conn, $_REQUEST['desc']);


$query="SELECT * FROM employer_login WHERE  company='$company'";
$query_run=@mysqli_query($conn,$query);
if(@mysqli_num_rows($query_run)>0)
{

	   $row=@mysqli_fetch_assoc($query_run);
$id=$row['id'];

	$query_run1=@mysqli_query($conn,"insert into internship values('','$id','$category','$location','$duration','$stipend','$posted','$apply','$start','$desc')");
echo "<script type='text/javascript'>
            alert('!!internship added!!');
            window.location.replace('employer_home.php');
            </script>";
}

//}
else{
echo "<script type='text/javascript'>
            alert('!!Error!!');
            window.location.replace('employer_home.php');
            </script>";
}
@mysqli_close($conn);
}
else{
?>
<script type="text/javascript">window.location.replace('index.php');</script>
<?php
}
?>
?>
