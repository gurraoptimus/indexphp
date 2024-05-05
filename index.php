<!DOCTYPE html>
<html>
<head>
	<title>PHP Basics</title>
	<h1>PHP Basics</h1>
</head>
<body>

<?php

$user = 123;
$user = "Belle Bun Bunny";

$data = [
	"first" => 2, 
	"second" => 3.99,
	"third" => 0
];

$price = $data["first"];

if ($price > 1) {

	echo "Price is > 1";
foreach ($data as $i => $val);
	echo $i . " = " . $val;}
?>
</body>
</html>
