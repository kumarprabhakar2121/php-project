<?php 
if(isset($_POST['s']))
{
	$id=$_POST['n'];
	$p=$_POST['p'];
		if($id=='argus' && $p=='academy')
	{
	session_start();
	$_SESSION['aid']=session_id();
	
	$_SESSION['a']=$id;

	
	header("location:admin.php");
	}
	else
	{
	header("location:login.php");
	}
}
else
{
	header("location:login.php");
}

?>