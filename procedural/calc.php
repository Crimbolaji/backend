<!DOCTYPE html>
<html>
<head>
	<title>Basic Calculator</title>
</head>
<body>
<form action="calc.php" method="get">
	<input type="tel" name="num1">
	<br>
	<br>
	<input type="tel" name="num2">
	<br>
	<br>
	<input type="submit" name="submit" value="Divide/">
</form>
<?php 
function divide($num1, $num2){
	$divisionContent = $num1/$num2;
	return $divisionContent;
}

if (isset($_GET['submit'])) {
	echo "Answer is " . divide($_GET["num1"], $_GET["num2"]);

}
 ?>
</body>
</html>