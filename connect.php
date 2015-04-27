<?php
if($con=mysqli_connect('localhost','root',''))
{
mysqli_select_db($con,'ais');	
}
else
{
		echo "Error In connecting Server";
die();
}
?>