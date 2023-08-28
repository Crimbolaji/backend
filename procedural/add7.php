<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add 2 integers</title>
</head>
<body>
    <form action="add.php" method="Post">
    <input type="tel" name="int1"> <br> <br>
	<input type="tel" name="int2"> <br> <br>
	<input type="submit" name="submit" value="Add +">

    </form>
<?php
function Add ($int1, $int2){
	$addContent = $int1+$int2;
	return $addContent;
}

if (isset($_POST['submit'])) {
	echo "Answer is " . Add ($_POST["int1"], $_POST["int2"]);

}
?>
</body>
</html>