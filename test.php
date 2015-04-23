<?php
require 'gpiolib/vendor/autoload.php';
use PhpGpio\Gpio;
echo "Setting up pin 17\n";
$gpio = new GPIO();
$gpio->setup(17, "out");
?>