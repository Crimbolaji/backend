<?php 
// Indexed Arrays
$PeopleOne = ["Bolaji", "Rasheed", "Ayat"];
echo $PeopleOne[1] ."<br/>";

//Alternatively, an arrays can be created thus below.
$PeopleTwo = array("Kamillah", "Juweiriyah", "Zulaykah");
echo $PeopleTwo[2];
//So, both works.

//To print all element at once. the 'echo' function does not work here.
//instead we use 'print_r' or var_dump function. means print readable.
$PeopleThree = array("Olaitan", "Bolanle", "Opeyemi");
echo $PeopleThree; //This will result in an error.
print_r($PeopleThree); //This works perfectly.

//Overwritting an element in an array
$PeopleThree[1] = "Hafeesat";
print_r($PeopleThree);

//What if we want to add a new element into the bracket?
// We call the variable, open and close an empty square bracket,
//equals to the new element. the new element will be added as the last.
$PeopleThree[] = "Ismaeel";
//print_r($PeopleThree);

//What if we want to count the number of element in an array?
// We use the function 'count'
//echo count($PeopleThree);

//What if we want to merge all the arrays together?
// We create another variable and call the function 'array_merge'.
$AllMyPeople = array_merge($PeopleOne, $PeopleTwo, $PeopleThree);
print_r($AllMyPeople);

?>