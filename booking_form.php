<?php

$d=$r='';
function dtcheck()
{
//system 
		$sy=date('Y');
		$sm=date('m');
		$sd=date('d');
	
	//entered 
		$d=date('Y-m-d',strtotime($_POST['d']));
		$ey=date('Y',strtotime($_POST['d']));
		$em=date('m',strtotime($_POST['d']));
		$ed=date('d',strtotime($_POST['d']));
	
	$diff=(($ey-1)*365 + ($em-1)*30 + $ed ) - (($sy-1)*365 + ($sm-1)*30 + $sd );
	
	if($diff>0 && $diff<=30)
	{
	return 'y';
	}
	else 
	{
	return 'n';
	}
}


if(isset($_POST['s']))
{


if(dtcheck()=='y')
	{
		$d=trim($_POST['d']);
	}
	else 
	{
		$r="** check date**";
	}


if(dtcheck()=='y')
	{		$x=$y='1';
				include"connection.php";
 
			$q="insert into  bookingtable (RID, CID, DATE )
			values('".$x."','".$y."','".$d."')";
			
			$sq=mysqli_query($cn,$q);
				if($sq)
				{
					echo '<script>alert("regesterd")</script>';
					$r=$d=$x=$y='';
				}
				else
				{
					echo '<br>'.mysqli_error($cn);
				}	
	
	
	}
	else
	{
			echo '<script>alert("**********check the dtails***********")</script>';
	}

}


?>

<form action="" method="POST" >
enter date [within next 30 days]:
<input type="date" name="d" value="<?php echo $d; ?>">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<span><?php echo $r; ?></span> 
<br><br>

<input type="submit" name="s">
</form>