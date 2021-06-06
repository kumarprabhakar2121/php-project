<?php 
if($_GET['cdel'])
{
 include"connection.php";
 $cdel=$_GET['cdel'];
 $q="delete from cust where cid='".$cdel."' ";

 $sq=mysqli_query($cn,$q);
	if($sq)
	{
		 header("location:display_registered_customer_from_table.php");
	}
	else
	{
		echo '<br>'.mysqli_error($cn);
	}	
 }
 else 
 {
 header("location:display_registered_customer_from_table.php");
 }
?>+