<?php 
//Syntax of while Loop
// while(condition){
//   statements;
// }

//Example
// $i = 0;
// while($i <= 6){
//     echo "The number is ". $i ."<br/>";
//     $i++;
// }

// Loops Excercises
// Create a script that displays 1-2-3-4-5-6-7-8-9-10 on one line.
// There will be no hyphen(-) at starting and ending position.

// solution.
// The condition says "no hyphen at both starting and ending position.
// We then introduce the conditional function "if" to specify where we want hypen.
// Without the "if" inclusion, the last integer will also have "-". 
// We can use any of the loops type.
$x = 1;
while($x <= 10){
    if($x <10){
        echo $x ."-";
    } else{
        echo $x;
    }
    $x++;
}

?>