<?php
session_start();
if(@$_SESSION['emp_com']){
$company=$_SESSION['emp_com'];
$date=date("Y-m-d");
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
  <script src="//cdn.ckeditor.com/4.5.5/basic/ckeditor.js"></script>
   <script src="//cdnjs.cloudflare.com/ajax/libs/ckeditor/4.5.9/adapters/jquery.js"></script>

 <script type="text/javascript">
   
$(document).ready(function(){



setInterval(function(){
  $.ajaxSetup({cache:false});
   $('#showintern').load("show_internship.php");
}, 500);

});



 </script>
<style>
.a4{
  margin-top: 12%;
}
.navbar{
  background-color: #DFEBF2  ;
  height: 13%;
box-shadow: 0px 0px 6px grey;
  
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
}
.active{
  border-bottom: 3px solid black;
border-radius: 0;
}
.a3{
  color: black;
}
.a5{
  margin-top: 21%;
  font-size:17px;
}
.r1{
  z-index: 1;
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
        <li><div style="font-weight: bold;" class="a5">Hiiii! <?php echo $company; ?></div></li>
        
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
       
         
        <li class="active"><a href="employer_home.php" class="a3">Internship</a></li>
        <li><a href="emp_dashboard.php" class="a3">Dashboard</a></li>
         <li><form action="emp_logout.php" method="post">
<input type="submit" class="a4 btn btn-default" value="Logout" ></form>
        </li>
      </ul>
    </div>
  </div>
</nav>


<div class="row r1">
  <div class="col-sm-1"></div>
  <div class="col-sm-6">
    <p id="showintern"></p>

  </div>
  <div class="col-sm-1"></div>
<div class="col-sm-3">
<div class="box1">
  <h2 class="text-center log" style="color: black; ">Add Internship</h2>
   <form class="form-horizontal" method="post" action="add_internship1.php" style="">
      <div class="form-group" style="">
      
       <select class="form-control" name="category"><option>--Enter Category--</option>
 <option>Machine Learning</option>
      <option>Web Development</option>
     <option>Cryptography</option><option>Android</option>
   </select>
    </div>
    <div class="form-group" style="">
      <label style="color: black; ">Location: <span class="req">*</span></label>
      <input class="form-control" type="text" placeholder="city , work from home" name="location" required>
    </div>
    <div class="form-group">
      <label style="color: black;">Duration: <span class="req">*</span></label>
      <input class="form-control" type="text" placeholder=" Ex-2 months" name="duration" required>
    </div>
     <div class="form-group" style="">
      <label style="color: black; ">Stipend: <span class="req">*</span></label>
      <input class="form-control" type="text" placeholder="Stipend Of Internship In Rs" name="stipend" required>
    </div> <div class="form-group" style="">
      <label style="color: black; ">Start Date: <span class="req">*</span></label>
      <input class="form-control" type="text" placeholder="Ex immediately , date" name="start" required>
    </div>
     <div class="form-group" style="">
      <label style="color: black; ">Posted On: <span class="req">*</span></label>
      <input class="form-control" type="date"  name="posted" value="<?php echo $date?>" readonly >
    </div>
     <div class="form-group" style="">
      <label style="color: black; ">Apply By: <span class="req">*</span></label>
      <input class="form-control" type="date"  name="apply" required>
    </div>
      <div class="form-group">
        <label style="color: black; ">Mention  skills needed to apply internship and Other Relevant Detail <span class="req">*</span></label>
                                            <div class="input-group">
                                                <textarea name="desc" id="shortdesc"  style="width: 100%;"></textarea> <script>
 CKEDITOR.replace( 'shortdesc' );
</script>
                                            </div>
                                        </div>
                                      
    <div class="form-group">
      <button class="btn btn-danger btn-block" type="submit"><label style="color: black;">Add Internship</label></button>
    </div>
</form>
</div>
</div>
<div class="col-sm-1"></div>
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