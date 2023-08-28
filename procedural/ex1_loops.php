<?php
$friends = ["Ayat", "Bolaji", "Rasheed", "Tolha", "Naqeeb"];
// for ($i=0; $i < count($friends); $i++) { 
//     echo $friends[$i] .'<br/>';
// }

// foreach ($friends as $friend) {
//     echo $friend .'<br/>';
// }

$products = [
    ['name' => 'MTN SME', 'Price' => "$250"],
    ['name' => 'MTN CG', 'Price' => "$300"],
    ['name' => 'Airtel CG', 'Price' => "$350"],
    ['name' => 'Airtel SME', 'Price' => "$920"],
    ['name' => '9mobile SME', 'Price' => "$250"],
    ['name' => '9mobile CG', 'Price' => "$920"],
    ['name' => 'Glo SME', 'Price' => "$250"],
    ['name' => 'Glo CG', 'Price' => "$500"],
];

// foreach ($products as $product) {
//     echo $product['name'] ." - ". $product['Price'] .'<br/>';
// }

// $i = 0;
// while ($i < count($products)) {
//     echo $products[$i]['name'] . " - " . $products[$i]['Price'];
//     echo "<br/>";
//     $i++;
// };

// Create a script that displays 1-2-3-4-5-6-7-8-9-10 on one line. There will be no hyphen(-) at starting and ending position.
for($x=1; $x<=10; $x++)
{
 if($x< 10)
 {
 echo "$x-";
 }
 else
  {
 echo "$x"."\n";
  }
}

// Create a script using a for loop to add all the integers between 0 and 30 and display the sum.
$sum = 0;
for($x=1; $x<=30; $x++)
{
$sum +=$x;
}
echo "The sum of the numbers 0 to 30 is $sum"."\n";






?>

