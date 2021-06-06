<?php 
if($_GET['rdel'])
{
 include"connection.php";
 $rdel=$_GET['rdel'];
 $q="delete from room_reg where rid='".$rdel."' ";

 $sq=mysqli_query($cn,$q);
	if($sq)
	{
		 header("location:display_room_reg_table.php");
	}
	else
	{
		echo '<br>'.mysqli_error($cn);
	}	
 }
 else 
 {
 header("location:display_registered_hostel_details_from _table.php");
 }
?>