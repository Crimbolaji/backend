<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
	// for ($i=0; $i < 100; $i+=10) { 
	// 	echo $i . "<br/>";
	// };
echo "write a PHP program that swaps out two characters in a single string" ."<br/>" ."<br/>";

echo "Method One" ."<br/>" ."<br/>"; 

$a = 15;
$b = 27;

echo "Before swapping a =" .$a. " and b =" .$b;
echo "<br/>";

$temp = $a;
$a = $b;
$b = $temp;

echo "After swapping a =" .$a. " and b =" .$b ."<br/>";
echo "<br/>";

echo "Method Two" ."<br/>" ."<br/>";
$a = 15;
$b = 27;
echo "Before swapping a =" .$a. " and b =" .$b;
echo "<br/>";
list($a, $b) = array($b, $a);
echo "After swapping a =". $a . ' and b =' . $b ."<br/>" ."<br/>";

echo "Write a PHP program and compute the sum of the digits of an integer" ."<br/>" ."<br/>";
function sum ($num1, $num2){
	$output = $num1+$num2;
	return $output;
}
$output = sum (10, 2);
var_dump($output);

$club = "C";
function swap($char)
{
	$firstCharacter = $char[0];
	$lastCharacterPosition = strlen($char) - 1;
	$lastCharacter = $char[$lastCharacterPosition];
	$char[0] = $lastCharacter;
	$char[$lastCharacterPosition] = $firstCharacter;

	echo $char  . "</br>";
}
 swap($club);

 $name = "Bol";
 function wap($str)
{
	if (strlen ($str) > 5) {
		$thirdChar = $str[2];
		$fifthchar = $str[4];
		$str[2] = $fifthchar;
		$str[4] = $thirdChar;
	}

	echo $str;
}
 wap($name);





?>
</body>
</html>