
<?php
session_start();
require 'connect.php';
?>
<style type="text/css">

td,th {
  font-size: 11px;
  padding: 4px;
 
}
 @media only screen and (max-width: 768px) {
    /* For mobile phones: */
   
    td th{
      font-size : 1vh; 
      padding: 1%;
    }
    .none{
      display: none;
    }
}

</style>
<?php
$company=$_SESSION['emp_com'];

$query="SELECT * FROM employer_login WHERE  company='$company'";
$query_run=@mysqli_query($conn,$query);
if(@mysqli_num_rows($query_run)>0)
{

	   $row=@mysqli_fetch_assoc($query_run);
$_SESSION['com_id']=$row['id'];
$id=$_SESSION['com_id'];

}

$query="SELECT * FROM internship WHERE  company_id='$id'";
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

?>
<table border="0" width="100%">
  <tr><td colspan="5" style="font-size: 28px; font-weight: bold;"><?php echo $category?></td></tr>

<tr><td colspan="5"  style="padding: 6px;">Location(s)=<?php echo $location?></td></tr>
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
?>