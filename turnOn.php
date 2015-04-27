
<?php

//pin NO:s
/*
Motor_no	GPIO NO    		Actual Pin No 			Ground
1         		7		         7                    9
2		   		0			     11                   25
3 		   		2				 13                   39
4		   		3				 15                   34

*/

include 'connect.php';

function getStatus($motor_no,$pin_no){
include 'connect.php';
$query="select * from motor".$motor_no."_status";
$result=mysqli_query($con,$query);
$row=mysqli_fetch_assoc($result);
return $row['status'];

}


function start_motor($motor_no,$pin_no){
	include 'connect.php';
	//echo $motor_no;
	if(strcmp(getStatus($motor_no,$pin_no),"ON")==0){
		
		

		
		system("gpio mode ".$pin_no." out");
		system("gpio write ".$pin_no." 0");
		
		$query="update motor".$motor_no."_status set status='OFF' where status='ON'";
		echo getStatus($motor_no,10);
				mysqli_query($con,$query);
		echo $query;

	//Update LOg
		$query="select max(id) from motor".$motor_no."_log";
		$res=mysqli_query($con,$query);
		$row=mysqli_fetch_assoc($res);
		$id=$row['max(id)'];

	  $query="update motor".$motor_no."_log"." set end_time=now() where id=".$id;
	  echo $query;
	  mysqli_query($con,$query);

	}
	else{
		
		
	$query="update motor".$motor_no."_status set status='ON' where status='OFF'";
		
		echo getStatus($motor_no,10);
		mysqli_query($con,$query);
		//echo $query;

	//Update LOg
		//$query="select max(id) from motor".$motor_no."_log";
		//$res=mysql_query($query);
		//$row=mysql_fetch_assoc($res);
		//$id=$row['max(id)'];

	  $query="insert into motor".$motor_no."_log values('',NOW(),'')";

	  //echo $query;
	  mysqli_query($con,$query);


	system("gpio mode ".$pin_no." out");
	system("gpio write ".$pin_no." 1");
		

	
	}
//Do operation..





//update log and insert  data
	
	
	//Update status
	//echo $query;
	//echo getStatus(1,4);
header('location:manage.php');

}


$motor_no;
if(isset($_GET['motor'])){
if(!empty($_GET['motor']))
{
	$motor_no=$_GET['motor'];

switch ($motor_no) {
	case 1:
	//echo "motor No ".$motor_no;

	start_motor(1,7);     //actual Pin No 7

		break;
	case 2:
		//echo "motor No ".$motor_no;
		start_motor(2,0);   //Actual Pin  NO 11

		break;
	
	case 3:
		//echo "motor No ".$motor_no;
		start_motor(3,2);    //Actual Pin No 13
		
		
		break;
	
	case 4:
		//echo "motor No ".$motor_no;
		start_motor(4,3);       //Actual Pin No 15
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