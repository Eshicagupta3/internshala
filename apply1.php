<?php
session_start();
require 'connect.php';
if(@$_SESSION['user_id']){
$userid=$_SESSION['user_id'];
$date=date('Y-m-d');
$internid=@mysqli_real_escape_string($conn, $_REQUEST['internid']);
$companyid=@mysqli_real_escape_string($conn, $_REQUEST['companyid']);

	$query_run1=@mysqli_query($conn,"insert into apply_internship values('','$userid','$internid','$companyid','$date')");
echo "<script type='text/javascript'>
            alert('!!internship applied!!');
            window.location.replace('index.php');
            </script>";


@mysqli_close($conn);
}
else{
?>
<script type="text/javascript">window.location.replace('index.php');</script>
<?php
}
?>
?>