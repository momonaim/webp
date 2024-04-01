<?php

// The location of the PDF file 
$cv = $_GET["cv"];
echo $cv;
// on the server 
$filename = "./uploads/" . $cv;

// Header content type 
header("Content-type: application/pdf");

header("Content-Length: " . filesize($filename));

// Send the file to the browser. 
@readfile($filename);
?>