<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Day4</title>
</head>
<body>
<?php
// Index and Associative Array
$Nigerian_Universities = [
    "Kwara_State" => [
        "Unilorin" => [
            "known_for" => "Academic Stability",
            "Allow_sibbling" => "Yes",
            "short_description" => "Better by far"
        ],
    ],
    "Lagos_State" => [
        "Unilag" => [
            "known_for" => "Sex for grades",
            "Allow_sibbling" => "No",
            "short_description" => "Center of excellence"
        ],
    ],
    "Oyo_State" => [
        "Unibadan" => [
            "known_for" => "We don't play here",
            "Allow_sibbling" => "Yes",
            "short_description" => "Pace Setter"
        ],
    ],
    "Osun_State" => [
        "OAU" => [
            "known_for" => "Famous Alumni",
            "Allow_sibbling" => "Yes",
            "short_description" => "The Great Ife"
        ],
    ],  
];

var_dump($Nigerian_Universities);

?>

</body>
</html>