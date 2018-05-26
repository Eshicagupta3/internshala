
<?php
session_start();
require 'connect.php';
if(@$_SESSION['emp_com']){
$companyid=$_SESSION['com_id'];
$company=$_SESSION['emp_com'];
?>
<html>
<head>
<title>chat</title>

 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="assets/css/animate.css" rel="stylesheet">
    <link rel="icon" href="/zealicon/assets/images/2.jpg" type="image/jpg">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>

<style type="text/css">
.navbar{
  background-color: #DFEBF2  ;
  height: 13%;
box-shadow: 0px 0px 6px grey;
  

}

.active{
  border-bottom: 3px solid black;
border-radius: 0;
}
td,th {
   font-size: 12px;
  padding: 5px;
 
}
.a3{
  color: black;
}
.a5{
  margin-top: 21%;
  font-size:17px;

}
 .navbar-toggle, .icon-bar {
    border:1px solid black;
}
 @media only screen and (max-width: 768px) {
    /* For mobile phones: */
    #myNavbar{
  background-color:#DFEBF2 ;
z-index: 20;
position: relative;
}}
</style>
</head>
<body>
 <nav class="navbar navbar-dafault">
  <div class="container-fluid">
    <div class="navbar-header">
     <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="#"><img src="assets/images/i.png"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><div style="font-weight: bold;" class="a5">Hiiii! <?php echo $company; ?></div></li>
        
      </ul>
      <form class="navbar-form navbar-right" action="emp_logout.php" method="post">
      
      <button type="submit" class="btn btn-default">Logout</button>
    </form>
      <ul class="nav navbar-nav navbar-right">
        
        <li><a href="employer_home.php" class="a3">Internship</a></li>
        <li class="active"><a href="emp_dashboard.php" class="a3">Dashboard</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="row">
  <div class="container">
	<div class="col-sm-2"></div>
	
<div class="col-sm-8">

<table border="0" width="100%">
  <tr><th colspan="3">Internship Details</th><th colspan="3">Candidate Details</th></tr>
</table>
<hr style="color: red">

<?php

$query="SELECT * FROM internship where company_id in (select company_id from apply_internship where company_id='$companyid')";

$query_run=@mysqli_query($conn,$query);
if(@mysqli_num_rows($query_run)>0)
{

	   while($row=@mysqli_fetch_assoc($query_run)){
      $category=$row['category'];
      $posted=$row['posted_on'];
$apply=$row['apply_by'];

      $id=$row['id'];
$query1="SELECT * FROM user_login where id in (select user_id from apply_internship where internship_id='$id')";
$query_run1=@mysqli_query($conn,$query1);
if(@mysqli_num_rows($query_run1)>0)
{

     while($row1=@mysqli_fetch_assoc($query_run1)){
$userid=$row1['id'];
$name=$row1['name'];
$email=$row1['email'];

$query2="SELECT * FROM apply_internship where internship_id='$id' and user_id='$userid'";
$query_run2=@mysqli_query($conn,$query2);
if(@mysqli_num_rows($query_run2)>0)
{

     $row2=@mysqli_fetch_assoc($query_run2);
$date=$row2['date'];

?>
<table border="0" width="100%">
  <tr><th> Category</th><th>Posted On</th><th>Apply By</th><th>Candidate Name</th> <th>Email</th><th>Applied Date</th></tr>
	<tr><td><?php echo $category;?></td><td><?php echo $posted;?></td><td><?php echo $apply;?></td><td><?php echo $name;?></td><td><?php echo $email;?></td><td><?php echo $date ?></td></tr>

</table>
<hr>
<br>
<?php
}
}
}
}
}
?>
</div>
<div class="col-sm-2"></div>
</div>
</div>
<?php
}
else{
?>
<script type="text/javascript">window.location.replace('index.php');</script>
<?php
}
?>
</body>
</html>