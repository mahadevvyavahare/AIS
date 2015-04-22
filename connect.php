<?php
if(mysql_connect('localhost','root','')&&mysql_select_db('ais')){
}
else
	{
		echo "Error In connecting Server";
die();
}
?>