<?php
session_start();
require 'connect.php';
if(@$_SESSION['emp_com'] or @$_SESSION['user_name']){

  ?>
<script type="text/javascript">window.location.replace('index.php');</script>
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
 
<style>
body{
  background-color: #F2F2F2    ;
}
.navbar{
  background-color: #DFEBF2  ;
  height: 13%;
box-shadow: 0px 0px 4px grey;
  
}
.box2{
  padding: 6%;
}
.box1{
  background-color: #859CA8  ;
  opacity: .9;
  padding: 5%;
  box-shadow: 0px 0px 4px #4195fc;
}
.a2{
  font-size: 30px;
color: black;
}
.a6{
  color: black;
  font-size: 13px; }
.a1{
  color: black;
  font-size: 17px; 
}
.nav-pills>li.active>a,.nav-pills>li.active>a:focus,.nav-pills>li.active>a:hover{
  border-bottom: 3px solid black;
  border-radius: 0;
  background-color: transparent;
}
.img2{
  padding-top: 30px;
}
.nav-pills>li>a:hover{
  background-color: transparent;
  color: white;
}
 .navbar-toggle, .icon-bar {
    border:1px solid black;
}

 @media only screen and (max-width: 768px) {
    /* For mobile phones: */
   .img2{
     padding: 80px 0;
   }
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
      <a class="navbar-brand" href="#"><img src="assets/images/i.png"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">


        
        
      </ul>
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
        <li><a href="index.php" class="a1"><button class="btn btn-default">Home</button></a></li>
       
      </ul>
    </div>
  </div>
</nav>

<div class="row">
<div class="container"> <div class="col-xs-1 col-sm-2"></div>
  
<div class="col-xs-10 col-sm-8 box2">
<div class="box1">
  <div class="row">
    <div class="col-xs-6 col-sm-6">
  <img src="assets/images/c1.png" width="100%;" class="img2">
</div>
<div class="col-xs-6 col-sm-6">
  <ul class="nav nav-pills nav-justified">
  <li class="active"><a href="#login" data-toggle="pill" class="a6">Login (both)</a></li>
  <li><a href="#register_stu" data-toggle="pill" class="a6">Register (student)</a></li>
  <li><a href="#register_emp" data-toggle="pill" class="a6">Register (employee)</a></li>
 <li>
   <!--<div class="dropdown">
    
  <button class=" dropdown-toggle" type="button" data-toggle="dropdown" style="background-color: transparent; border: 0px;">Register 
      <i class="fa fa-caret-down"></i>
    </button>
     <ul class="dropdown-menu">
       <li><a href="#register_stu" class="a1" data-toggle="pill">Student</a></li>
      <li><a href="#register_emp" class="a1" data-toggle="pill">Employee</a></li>
      
    </ul>
  </div> 
-->
</li>


</ul>
  <div class="tab-content">
  
  <div id="login" class="tab-pane fade in active">
    <br>                  
   <form  method="post" action="login1.php" style="">
    
    <div class="form-group" style="">
      <label style="color: white; ">Email:<span class="req">*</span></label>
      <input class="form-control" type="email" placeholder="Enter your Email" name="luser" required>
    </div>
    <div class="form-group">
      <label style="color: white;">Password:<span class="req">*</span></label>
      <input class="form-control" type="password" placeholder="Enter your password" name="lpass" required>
    </div>
    
    <div class="form-group">
      <button class="btn btn-danger btn-block" type="submit"><label style="color: white;">Login</label></button>
    </div>
</form>
</div>

  <div id="register_stu" class="tab-pane fade ">
   
    <form  method="post" action="register_stu.php" style="">
    <br>
    <div class="form-group" style="">
      <label style="color: white; ">Name:<span class="req">*</span></label>
      <input class="form-control" type="text" placeholder="Enter your Name" name="ruser" required>
    </div> 
    <div class="form-group" style="">
      <label style="color: white; ">Email:<span class="req">*</span></label>
      <input class="form-control" type="email" placeholder="Enter your Email" name="remail" required>
    </div>
    <div class="form-group">
      <label style="color: white;">Password:<span class="req">*</span></label>
      <input class="form-control" type="password" placeholder="Enter your password" name="rpass" required>
    </div>
    
    <div class="form-group">
      <button class="btn btn-danger btn-block" type="submit"><label style="color: white;">Register</label></button>
    </div>
</form>
 </div> 
 <div id="register_emp" class="tab-pane fade">
  <br>
    <form  method="post" action="register_emp.php" style="">
    <div class="form-group" style="">
      <label style="color: white; ">Name:<span class="req">*</span></label>
      <input class="form-control" type="text" placeholder="Enter your Name" name="euser" required>
    </div> 
    <div class="form-group" style="">
      <label style="color: white; ">Email:<span class="req">*</span></label>
      <input class="form-control" type="email" placeholder="Enter your Email" name="eemail" required>
    </div>
    <div class="form-group">
      <label style="color: white;">Password:<span class="req">*</span></label>
      <input class="form-control" type="password" placeholder="Enter your password" name="epass" required>
    </div>
     <div class="form-group" style="">
      <label style="color: white; ">Company:<span class="req">*</span></label>
      <input class="form-control" type="text" placeholder="Enter your Company Name" name="ecompany" required>
    </div>
    <div class="form-group">
      <button class="btn btn-danger btn-block" type="submit"><label style="color: white;">Register</label></button>
    </div>
</form>
 </div> 

</div>
</div>
</div>
</div>

<div class="col-xs-1 col-sm-2"></div>
</div>
</div>

</body>
</html>