
<?php
//pin NO:s
/*
sr.NO	GPIO PIN    		MOTOR  No
1          5					1
2		   6					2
3 		   7					3	
4		  17 					4	

*/
function getStatus($motor_no,$pin_no){
return "ON";

}

function start_motor($motor_no,$pin_no){
	echo $motor_no;


//Do operation..





//update log and insert  data
	
	include 'connect.php';
	//Update status
	$query="update motor".$motor_no."_status set status='OFF' where status='ON'";
	//echo $query;
	mysql_query($query);
	//Update LOg
$query="insert into motor".$motor_no."_log values('',NOW(),'')";

mysql_query($query);
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