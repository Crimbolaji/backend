<?php
// Indexed Arrays
$peopleOne = ["Bolaji", "Funmi", "Ayomide"];
// echo $peopleOne[1];

$peopleTwo = ["Ola", "Bola", "Fola", "Tola"];
// print_r($peopleTwo);

$peopleThree = array_merge($peopleOne, $peopleTwo);
print_r($peopleThree) ."<br/>";

// Associative Arrays
$defenders = ["Bj" => "RB", "Yahya" => "LB", "More" => "RCF", "Prince" => "LCF"];
$midfielders = ["Abest" => "DMF", "Raul" => "RMF", "Fikky" => "LMF"];
$forwards = ["Quadri" => "RWF", "Paapi" => "LWF", "Jellil" => "CF"];
$ytfa = array_merge($defenders, $midfielders, $forwards);
print_r($ytfa);

//Multidimensional Arrays
$ytfa = [
   "Defenders" => [
        "RB" => ["Alfa" => 2, "Kante" => 13, "Soku" => 17],
        "LB" => ["Yahya" => 3, "Iyiola" => 33],
        "CB" => ["More" => 5, "Prince" => 6, "Torres" => 15, "Haykay" => 22],
   ],
   "Midfielders" => ["A'best" => 4, "Raul" => 10, "Hari" => 14, "Fikky" => 25],
   "Forwards" => ["Quadri" => 7, "Pappi" => 11, "Jellil" => 9]
];
var_dump($ytfa);



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>