<?php 
 include"connection.php";
 
 $q="CREATE TABLE bookingtable (
    BID int(5) primary key auto_increment,
    RID int(5) not null, 
    CID int(5) not null,
    DATE date not null)";

 $sq=mysqli_query($cn,$q);
	if($sq)
	{
		echo 'created';
	}
	else
	{
		echo '<br>'.mysqli_error($cn);
	}	
 
?>