<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>


<nav class="navbar navbar-expand-lg navbar-light bg-info">
  <a class="navbar-brand text-white" href="#"><b>HOSTEL KHOJ</b></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    
      <a class="nav-item nav-link text-white" href="index.php">HOME</a>
      <a class="nav-item nav-link text-white" href="creg.php">CUSTOMER SIGNUP</a>
   
    </div>
  </div>
</nav>
<style>
.m{min-height:300px;margin:5px;background-color:pink;padding:10px;}

</style>
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
					echo '<script>alert("booked successfully")</script>';
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

<div class="fluid-container">
	<div class="row">
			<div class="col-md-8 offset-md-2">
						<div class="m">
					<a style=" text-align: center";><h2><u>	BOOKING </u></h2></a>
							<br><br>
	
<form action="" method="POST" >
enter date [within next 30 days]:
<input type="date" name="d" value="<?php echo $d; ?>">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<span><?php echo $r; ?></span> 
<br><br>

<input type="submit" name="s">
</form>


						</div>
			</div>	
	</div>
</div>