<?php
//Loops are ways of repeating an action with a code. 
//For Loop

//$numbers = [1, 2, 3, 4, 5]; //declare a variable. it may be strings or integer.
//call the function 'for' which takes three argument in a bracket.
//the first argument is the count variable, second is the condition and third is incrementation.

//for ($i = 0; $i <= 5; $i++){
//    echo $i . '<br />';
//}

//$names = ['Wasiu', 'Bolaji', 'Aweda', 'Aduke', 'Bolanle'];

//for ($i = 0; $i < count($names); $i++){
 //   echo $names[$i] . '<br />'; //echoing the $i alone here will only display the indexes without the names
    //that is why the arrays $names is included.
//}

//foreach loop provides same result as for loop with different syntax.
//it takes 3 argument also. variable name, the function 'as' and the third argument which can be named anything.
//meanwhile, the third argument is echoed.
//foreach ($names as $name){
//    echo $name . '<br />';
//}
$bio = [
    ['name' => 'Wasiu', 'age' => 20],
    ['name' => 'saka', 'age' => 19],
    ['name' => 'Reece', 'age' => 21],
    ['name' => 'sanch', 'age' => 22],
    ['name' => 'marcus', 'age' => 23]
];
foreach ($bio as $name){
    echo $name['name'] . ' - ' . $name['age'] . '<br />';
}
?>