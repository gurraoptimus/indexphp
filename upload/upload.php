<?php
if (isset($_POST["submit"])) {
	$file = $_FILES["file"];
	print($file);
	$fileName = $_FILES["file"]["name"];
}
