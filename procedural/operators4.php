<?php 
//Ternary Operator

//Ternary Operator works on truth expression.
//It takes three operands - a condition, a result statement for true and a result statement for false.
//That's why it is called a ternary operator.

//Syntax of Ternary Operator
//(expression)? statement1 : statement2;

//Example 1

$day = 1;
//Here we declare a variable $day 1. 
//Let's assume day1 here means a Monday. First day of the week.
$message = ($day == 6)? "Today is holiday" : "Today is a working day";
//Ternary operators returns a statement. A variable is needed to store the statement.
//The first expression is like asking a question. that's why it has a question mark.
//So, we ask: Is the variable declared (day1, Monday) same as day6, a Saturday?
//If it is true, the second statement will be our output.
//And of course, 1 isn't equal 6. Monday isn't Saturday.
//Therefore, third statement (false) will be printed.
echo $message . "<br/>";
//Alternatively, we can echoed direct without storing in a variable
//like below.
echo ($day == 6)? "Today is Saturday" : "Today is Monday" ."<br/>";

//Example 2
$score = 40;
echo ($score >= 40)? "Pass" : "Fail";


?>