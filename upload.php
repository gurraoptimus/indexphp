<?php
if (isset($_POST["submit"])) {
	$file = $_FILES["file"];
	print_r($file);
	
	$fileName = $_FILES["file"]["name"];
	$fileTmpName = $_FILES["file"]["tmp_name"];
	$fileName = $_FILES["file"]["name"];
	$fileName = $_FILES["file"]["name"];
	$fileName = $_FILES["file"]["name"];

	$fileExt = explode('.', $fileName);
	$
}
?>