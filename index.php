<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<head>
    <title>PHP Basics</title>
    <h1>PHP Basics</h1>
</head>

<body>
    <?php

$user = 123;
$user = "Belle Bun Bunny";

$data = ["first" => 2, "second" => 3.99," third" => 0
];

$price = $data["first"];

if ($price = $data);{
	echo "$price is > 1 $user";
foreach ($data as $i => $val);
	echo $i . " = " . $val;}
?>
</body>

</html>