
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>

<style>
.a{height:50px; background-color:lime; margin:5px;}
.t{height:300px; background-color:green;margin:5px;}
.x{height:300px; background-color:blue;margin:5px;}

#c1{position:absolute;top:5%;left:5%;width:90%;height:90%;}
</style>
<body onload="sh()">
<div class="fluid-container">
	<div class="row">
				<div class="col-md-4 col-sm-12">
						<div class="a">
						
						</div>
				</div>
				<div class="col-md-4 col-sm-6">
						<div class="a">
						
						</div>
				</div>
				<div class="col-md-4 col-sm-6">
						<div class="a">
					
						</div>
				</div>
	</div>
	<div class="row">
	<div class="col-md-6 offset-md-3 col-sm-8 offset-sm-2">
			<div class="t">
			<div id="c1"><img src="a1.jpg" id="m" width="100%" height="100%"></div>	
			</div>
	</div>
	</div>
	
	<div class="row">
	<div class="col-md-9  col-sm-6">
			<div class="x">
			</div>
	</div>
	<div class="col-md-3 col-sm-6">
			<div class="x">
			</div>
	</div>
	</div>
	
</div>

</body>
<script>
var i=1;
function sh()
{
document.getElementById("m").src="a"+i+".jpg";
if(i<9)
{
i++;
}
else
{
i=1;
}
setTimeout("sh()",4000);
}

</script>
