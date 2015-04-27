
<?php

//pin NO:s
/*
sr.NO	GPIO PIN    		MOTOR  No
1          5					1
2		   6					2
3 		   7					3	
4		  17 					4	

*/

include 'connect.php';
function getStatus($motor_no,$pin_no){

$query="select * from motor".$motor_no."_status";
$result=mysql_query($query);
$row=mysql_fetch_assoc($result);
return $row['status'];

}


function start_motor($motor_no,$pin_no){
	
	//echo $motor_no;
	if(strcmp(getStatus($motor_no,$pin_no),"ON")==0){
		
		

		//echo "Status ON Doing OFF";

		
		$query="update motor".$motor_no."_status set status='OFF' where status='ON'";
		echo getStatus($motor_no,10);
				mysql_query($query);
		echo $query;

	//Update LOg
		$query="select max(id) from motor".$motor_no."_log";
		$res=mysql_query($query);
		$row=mysql_fetch_assoc($res);
		$id=$row['max(id)'];

	  $query="update motor".$motor_no."_log"." set end_time=now() where id=".$id;
	  echo $query;
	  mysql_query($query);

	}
	else{
		
		
	$query="update motor".$motor_no."_status set status='ON' where status='OFF'";
		
		echo getStatus($motor_no,10);
		mysql_query($query);
		echo $query;

	//Update LOg
		//$query="select max(id) from motor".$motor_no."_log";
		//$res=mysql_query($query);
		//$row=mysql_fetch_assoc($res);
		//$id=$row['max(id)'];

	  $query="insert into motor".$motor_no."_log values('',NOW(),'')";

	  echo $query;
	  mysql_query($query);

	
	}
//Do operation..





//update log and insert  data
	
	
	//Update status
	//echo $query;
	//echo getStatus(1,4);
//header('location:manage.php');

}


$motor_no;
if(isset($_GET['motor'])){
if(!empty($_GET['motor']))
{
	$motor_no=$_GET['motor'];

switch ($motor_no) {
	case 1:
	//echo "motor No ".$motor_no;
	start_motor(1,17);

		break;
	case 2:
		//echo "motor No ".$motor_no;
		start_motor(2,17);

		break;
	
	case 3:
		//echo "motor No ".$motor_no;
		start_motor(3,17);
		
		
		break;
	
	case 4:
		//echo "motor No ".$motor_no;
		start_motor(4,17);
		break;
	
	default:
		//echo "motor Not Available ".$motor_no;
		break;
}

}
}
die();
require 'gpiolib/vendor/autoload.php';
use PhpGpio\Gpio;
echo "Setting up pin 17\n";
$gpio = new GPIO();
$gpio->setup(17, "out");
?>