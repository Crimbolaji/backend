<?php
//While loop
//like for loop, while loop also takes 3 argument but not together in the bracket.
$bio = [
    ['name' => 'Wasiu', 'age' => 20],
    ['name' => 'saka', 'age' => 19],
    ['name' => 'Reece', 'age' => 21],
    ['name' => 'sanch', 'age' => 22],
    ['name' => 'marcus', 'age' => 23]
];

$i = 0; //first argument. initializing a count variable
//second argument. condition in the bracket.
while ($i < count($bio)){
    echo $bio[$i]['name'] . ' - ' . $bio[$i]['age'];
    echo '<br />';
    $i++; //third argument. Incrementation.
}

?>