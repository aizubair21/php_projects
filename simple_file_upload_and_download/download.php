<?php 

// //get file name from request
// $file = $_GET['file'];

// //set filename for download
// $file_name = $file;

// //check all of data
// header("content-desposition: attachment; filename=".urldecode($file_name));

// $fo = fopen($file_name,"r");

// while (!feof($fo)) {
//     echo fread($fo, 8192);

//     flush();
// }

// fclose($fo);


$file_url = $_GET["file"];

header('Content-Type: application/octet-stream');

header("Content-Transfer-Encoding: Binary"); 

header("Content-disposition: attachment; filename=\"" . basename($file_url) . "\""); 

readfile($file_url); 