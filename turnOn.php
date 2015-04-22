<?php
$motor_no;
if(!empty($_GET['motor']))
{
	echo $motor_no=$_GET['motor'];
}

//pin NO:s
/*
sr.NO	GPIO PIN    		MOTOR  No
1          5					1
2		   6					2
3 		   7					3	
4		  17 					4	

*/
require 'gpiolib/vendor/autoload.php';
use PhpGpio\Gpio;

echo "Setting up pin 17\n";
$gpio = new GPIO();
$gpio->setup(17, "out");

?>