<?php 
//A binary operator works on two operands 
//and manipulates them to return an output.
//PHP has the following types of binary operators.

//Arithmetic Operator
//Arithmetic operators work on only two numeric operands to perform common arithmetical operations,
//such as addition, subtraction, multiplication etc. If the operands are not numeric,
//then it automatically converts to numeric.

$a = 12; $b = 10;
echo $a + $b . "<br/>";
echo $a - $b . "<br/>";
echo $a * $b . "<br/>";
echo $a / $b . "<br/>";
echo $a % $b . "<br/>";
//% sign is called a Modulus operator.
//For example, the expression "5 mod 2" would evaluate to 1,
//because 5 divided by 2 has a quotient of 2 and a remainder of 1, 
//while "9 mod 3" would evaluate to 0,
//because the division of 9 by 3 has a quotient of 3 and a remainder of 0;
//there is nothing to subtract from 9 after multiplying 3 times 3.

?>