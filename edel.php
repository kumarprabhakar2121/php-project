<?php 
if($_GET['edel'])
{
 include"connection.php";
 $edel=$_GET['edel'];
 $q="delete from enquiry where eid='".$edel."' ";

 $sq=mysqli_query($cn,$q);
	if($sq)
	{
		 header("location:enquiry.php");
	}
	else
	{
		echo '<br>'.mysqli_error($cn);
	}	
 }
 else 
 {
 header("location:enquiry.php");
 }
?>