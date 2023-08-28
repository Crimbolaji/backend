<?php
// 1) The if statement
    // With the if statement your code only executes only when the condition is true.
    
    // Syntax:
    // if(condition){
    //     //code to be executed when condition is true
    // }
    // Example:
    // Let's check if a mark entered is greater than or equal to 80. If true an A grade is given.
    //defining a variable
    $mark = 120;
    if($mark >= 80)
    {
	    echo "you have an A";
    };

// 2) The if...else statements
    // The if...else statement is used when a condition is satisfied and when it is not satisfied. So it's used when the condition is either true or false.
    
    // Syntax:
    // if (condition){
	//     //code to be executed when true }
    // else {
	//     //code to be executed when false
    // }

    //Example:
    // Here, we are going to check if the letter entered is an F which will display female else we display male.

    //defining a variable
    $gender = 'F';
    if ($gender == 'F'){
        echo "FEMALE";
    }
    else { 
        echo "MALE";
    };

// 3) The if...elseif...else statements
    // In a situation where you have several conditions, for example a program to grade students based on their marks with the letters A, B, C, D, F. the if...elseif...else is used for this.
    
    // Syntax:
    // if (condition1){
	//     code 1 to be executed
    // }
    // elseif(condition2) {
	//     code 2 to be executed 
    // }
    // else{
	//     code to be executed if code 1 and code 2 are not true
    // }

    // Example:
    // We are going to grade students with the letters A, B, C, D, F based on their marks on 100.
    //defining a variable
    $marks = 75;
    if ($marks>79){
        echo "A";
    }
    elseif($marks<=79 &&  $marks>60) { 
        echo "B";
    }
    elseif($marks<=60 && $marks>50) { 
        echo "C";
    }
    elseif($marks=50) { 
        echo "D";
    }
    else{
        echo "F";
    };

// 4) The nested if...else statements
    // When you find if...else statements inside an if...else statement the statements are nested. With this statement, you can get alternatives results when a condition is true or false.

    // // Syntax:
    // if (condition 1 )
    //     {
    //         if (condition 2 )
    //         {
    //             //  code1 to be executed
    //         }
    //         else
    //         {
    //             // code 2 to be executed
    //         }
    //     }
    //     else
    //     {
    //         // code 4 to be executed
    //     }

    // Example:
    // Let's compare two numbers using the nested if statement.
    // defining variables
    $number1 = 40;
    $number2 = 12;
    if ($number1 != $number2) {
        echo 'number1 is different from number2';
        echo '<br>';
        if ($number1 > $number2) {
            echo 'number1 is greater than number2';
        } else {
            echo 'number2 is greater than number1';
        }
    } else {
        echo 'number1 is equal to number2';
    }

//  5) The switch statement
    // The switch statement is very similar to the if...else statement. But in the cases where your conditions are complicated like you need to check a condition with multiple constant values, a switch statement is preferred to an if...else. The examples below will help us better understand the switch statements.
    
    // Syntax:
    // switch (n)
    // {
	//     case constant1:
	// 	    // code to be executed if n is equal to constant1;
	// 	    break;
	//     case constant2:
	// 	    // code to be executed if n is equal to constant2;
	// 	    break;
	//     .
	//     .
	//     .
	//     default:
	// 	    // code to be executed if n doesn't match any constant
    // }

    // Example:
    // Let's rewrite the example of if…..else statements using switch statements,
    //variable definition
    $gender = 'M';
    switch ($gender) {
    case 'F':
        echo 'F is FEMALE';
    break;
    case 'M':
        echo 'M is MALE';
    break;
    default:
        echo 'Invalid choice';
}
?>