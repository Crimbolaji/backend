<?php
// Question: write a PHP program to print the multiple of 7
// from 1-1000. print one number per line.
// Answer (steps)
// write a loop that runs from 1-1000
// use the modulo operator to check if the current number in the loop is divisible by 7
// wrap the step above in a conditional
// print the number if it is divisible by 7
// each printed number should be on a single line
// for ($i=0; $i <= 1000; $i++) 
// { 
//     if( ($i % 7) === 0)
//     {
//     	echo $i . "</br>";
//     }
// }
$count = 1;
while ($count <= 1000) {
	if( ($count % 7) === 0){
		echo $count . "</br>";
	}
	$count ++;
}

?>