<?php
if (isset($_POST["submit"])) {
	$file = $_FILES["file"];
	print_r($file);
	
	$fileName = $_FILES["file"]["name"];
	$fileTmpName = $_FILES["file"]["tmp_name"];
	$fileSize = $_FILES["file"]["size"];
	$fileError = $_FILES["file"]["error"];
	$fileType = $_FILES["file"]["type"];

	
	$fileExt = explode('.', $fileName);
	$fileActualExt = strtolower(end($fileExt));

	$allowed = array('jpg', 'jpeg', 'png', 'pdf');
}
?>