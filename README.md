nzpBM
=====

NZP benchmark class

Usage:
<?php
require('nzpBM.php');
$benchmark = new nzpBM("For loop");

// Initializes the benchmark start time.
$benchmark->start();
for($i=0;$i<10000;$i++){
	// test some code
}

// Echoes the benchmark duration.
echo $benchmark;
?>