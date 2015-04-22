
<?php
//pin NO:s
/*
sr.NO	GPIO PIN    		MOTOR  No
1          5					1
2		   6					2
3 		   7					3	
4		  17 					4	

*/
function start_motor($motor_no,$pin_no){
	echo $motor_no;
}

$motor_no;
if(isset($_GET['motor'])){
if(!empty($_GET['motor']))
{
	$motor_no=$_GET['motor'];

switch ($motor_no) {
	case 1:
	echo "motor No ".$motor_no;
	

		break;
	case 2:
		echo "motor No ".$motor_no;
		break;
	
	case 3:
		echo "motor No ".$motor_no;
		break;
	
	case 4:
		echo "motor No ".$motor_no;
		break;
	
	default:
		echo "motor Not Available ".$motor_no;
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