<?php
session_start();
require 'connect.php';
if(@$_SESSION['emp_com']){

  ?>
<script type="text/javascript">window.location.replace('employer_home.php');</script>
<?php
}
if(@$_SESSION['user_id']){
$userid=$_SESSION['user_id'];
$username=$_SESSION['user_name'];
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
 
<style>
.img1{
  opacity: .6;
  margin-top: -1.6%;
}
.p1{

  
  font-size: 30px;
  color: white;
  font-weight: bold;
}
.active{
  border-bottom: 3px solid black;
border-radius: 0;
}
.navbar{
  background-color: #DFEBF2  ;
  height: 13%;
box-shadow: 0px 0px 6px grey;
  
}
tr th{
  padding: 5%;

}
.img3 {
    position: relative;
}

.p1 {
    position: absolute;
   top:50px;
   left: 30%;
   right: 20%;
    font-size: 25px;

}
.box1{
  background-color: black;
  opacity: .8;
  padding: 40px;

}
.a2{
  color: black;
   
}
.but1{
  border-color: black;
}

.a5{
  margin-top: 21%;
  font-size:16px;
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
}
    .img1 {
        
        height: 25%;
        margin-top: -3%;
    }
    td th{
      font-size : 1vh; 
      padding: 1%;
    }
    .none{
      display: none;
    }
    .p1{
      font-size: 15px;
    }
}
}

</style>
</head>
<body>
  <nav class="navbar navbar-dafault">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="but1 navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <script type="text/javascript"></script>
    <a class="navbar-brand" href="#"><img src="assets/images/i.png"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
    
      <?php
if(@$_SESSION['user_id']){
echo '  <ul class="nav navbar-nav">
        <li><div style="font-weight: bold;" class="a5">Hiiii! ';
        echo $username. '</div></li>
        
      </ul><ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="Index.php" class="a2">Internship</a></li>
        <li><a href="user_dashboard.php" class="a2">Dashboard</a></li>
          
          <form class="navbar-form navbar-right" action="user_logout.php" method="post">
      
      <button type="submit" class="btn btn-default">Logout</button>
    </form>
      </ul>';
}
else{
      ?>
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
       
      </ul>
      <?php
}
      ?>
    </div>
  </div>
</nav>
<div class="img3">
<img src="assets/images/best1.jpg" class="img1" height="40%" width="100%;">
<p class="p1">Find Best Summer And Winter Internship</p>
</div>
<br><br>
<div class="row">
<div class="container"> <div class="col-xs-0 col-sm-2"></div>
  
<div class="col-xs-11 col-sm-8">

<?php
if(@$_SESSION['user_id']){
$query="SELECT * FROM internship where id not in (select internship_id from apply_internship where user_id='$userid') order by id desc";
}
else{
$query="SELECT * FROM internship order by id desc";
}
$query_run=@mysqli_query($conn,$query);
if(@mysqli_num_rows($query_run)>0)
{

     while($row=@mysqli_fetch_assoc($query_run)){

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
$query1="SELECT * FROM employer_login WHERE  id='$companyid'";
$query_run1=@mysqli_query($conn,$query1);
if(@mysqli_num_rows($query_run1)>0)
{

     $row=@mysqli_fetch_assoc($query_run1);
$company=$row['company'];

?>
<table border="0" width="100%">
  <tr><td colspan="5" style="font-size: 28px; font-weight: bold;"><?php echo $category?></td></tr>

<tr><td colspan="5"  style="padding: 6px;">Location(s)=<?php echo $location?></td></tr>
<tr><td colspan="5"  style="padding: 6px; font-style: italic;" ><?php echo $company?></td></tr>
<tr><th style="text-align: center;">start date</th><th>duration</th><th> stipend</th><th class="none">Posted on</th><th class="none"> Apply by</th></tr>
<tr style="text-align: center;"><td><?php echo $start?></td><td><?php echo $duration?></td><td><?php echo $stipend?></td><td class="none"><?php echo $posted?></td><td class="none"><?php echo $apply?></td><td>
<form method="post" action="internship_detail.php">
    <input type="hidden" value="<?php echo $internid ?>" name="intern1id">
    <input type="submit" class="btn btn-default" value="View Details"></form>
</td></tr>
</table>
<hr>
<br>
<?php
}
}
}
?>
</div>
<div class="col-xs-1 col-sm-2"></div>
</div>
</div>

</body>
</html>