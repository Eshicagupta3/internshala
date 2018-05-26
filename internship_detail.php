<?php
session_start();
require 'connect.php';
if(@$_SESSION['user_id']){
$userid=$_SESSION['user_id'];
$username=$_SESSION['user_name'];
}
if(@$_SESSION['emp_com']){
$company=$_SESSION['emp_com'];
}
$internid=@mysqli_real_escape_string($conn, $_REQUEST['intern1id']);
if($internid=='' and @$_SESSION['emp_com']){
	?>
<script type="text/javascript">window.location.replace('employer_home.php')</script>
	<?php
}
else if($internid==''){
	?>
<script type="text/javascript">window.location.replace('index.php')</script>
	<?php
}
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
.a4{
  margin-top: 12%;
}
.navbar{
  background-color: #DFEBF2  ;
  height: 13%;
box-shadow: 0px 0px 6px grey;
  
}
.active{
  border-bottom: 3px solid black;
border-radius: 0;
}
.a3{
  color: black;
}
 .navbar-toggle, .icon-bar {
    border:1px solid black;
}

.a5{
  margin-top: 21%;
  font-size:17px;
}
.box{
	border: 1px solid black;
	padding: 4% 7% 4% 7%;
	width: 100%;
	text-align: left;
}

td,th {
   font-size: 13px;
  padding: 5px;
 
}
 @media only screen and (max-width: 768px) {
    /* For mobile phones: */
    #myNavbar{
  background-color:#DFEBF2 ;
z-index: 10;
position: relative;
}
}
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
     <a class="navbar-brand a3" href="#"><img src="assets/images/i.png"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
      	<?php
      	if(@$_SESSION['emp_com'])
{
      		?>
        <li><div style="font-weight: bold;" class="a5">Hiiii! <?php echo $company; ?></div></li>
        </ul>
      
      <ul class="nav navbar-nav navbar-right">
       
         
        <li class="active"><a href="employer_home.php" class="a3">Internship</a></li>
        <li><a href="emp_dashboard.php" class="a3">Dashboard</a></li>
         <li><form action="emp_logout.php" method="post">
 <?php
}
else if(@$_SESSION['user_id'])
{
 ?>
<li><div style="font-weight: bold;" class="a5">Hiiii! <?php echo $username; ?></div></li>
        
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
       
         
        <li class="active"><a href="index.php" class="a3">Internship</a></li>
        <li><a href="user_dashboard.php" class="a3">Dashboard</a></li>
         <li><form action="user_logout.php" method="post">

<input type="submit" class="a4 btn btn-default" value="Logout" ></form>
        </li>
        <?php
    }

    else{?>
  </ul>
      
      <ul class="nav navbar-nav navbar-right">
 <form class="navbar-form navbar-right" action="login1.php" method="post" style="margin-top: 1.2%;">
      <div class="form-group" >
     
      <input class="form-control" type="text" placeholder="Enter your Email" name="luser" required>
    </div>
      <div class="form-group">
      
      <input class="form-control" type="password" placeholder="Enter your password" name="lpass" required>
    </div>
      <button type="submit" class="btn btn-default">Login</button>
    </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="user_register.php" class="a1"><button class="btn btn-default">Register</button></a></li>
        <li><a href="index.php" class="a1"><button class="btn btn-default">Home</button></a></li>
       
  <?php
}?>
      </ul>
    </div>
  </div>
</nav>

<div class="row">
	<div class="col-sm-2"></div>
	
<div class="col-sm-8">


<?php


$query="SELECT * FROM internship where id='$internid' ";
$query_run=@mysqli_query($conn,$query);
if(@mysqli_num_rows($query_run)>0)
{
$row=@mysqli_fetch_assoc($query_run);
$category=$row['category'];
$location=$row['location'];
$stipend=$row['stipend'];
$duration=$row['duration'];
$posted=$row['posted_on'];
$apply=$row['apply_by'];
$start=$row['start_date'];
$internid=$row['id'];
$desc=$row['description'];
$companyid=$row['company_id'];
?>
<table border="0" width="100%">
	<tr><td colspan="4" style="font-size: 28px; font-weight: bold;"><?php echo $category?></td>
	<td>
</td></tr>

<tr ><td colspan="5">Location(s)=<?php echo $location?></td></tr>
<tr style="text-align: left;"><th>start date</th><th>duration</th><th> stipend</th><th>Posted on</th><th>Apply by</th></tr>
<tr style="text-align: left;"><td><?php echo $start?></td><td><?php echo $duration?></td><td><?php echo $stipend?></td><td><?php echo $posted?></td><td><?php echo $apply?></td></tr>

</table>
<hr>
<div class="box">
<p><?php echo $desc ?></p>
<center>
	<?php
if(@$_SESSION['user_id']){
	$query4="SELECT * FROM apply_internship where internship_id='$internid' and user_id='$userid' ";
$query_run4=@mysqli_query($conn,$query4);
if(@mysqli_num_rows($query_run4)>0)
{
echo "<button class='btn btn-danger' disabled>Already Applied</button>";
}



else{
?>

<form method="post" action="apply1.php">
		<input type="hidden" value="<?php echo $internid ?>" name="internid">
			<input type="hidden" value="<?php echo $companyid ?>" name="companyid">
	<input type="submit" class="btn btn-danger" value="Apply">
</form>
<?php
}
}
else if(@$_SESSION['emp_com']){
	
}
else{
	?>
	<form method="post" action="user_register.php">
		
	<input type="submit" class='btn btn-danger' value="Apply">
</form>
	<?php
}
?>
</center>
</div>

<?php
}
?>
</div>
<div class="col-sm-2"></div>
</div>
</body>
</html>