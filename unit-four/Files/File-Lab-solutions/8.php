<?php
/*
8. Write a program that reads only a single line of data or text from the file.
*/

$filename = "data.txt";

$data = "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. 
The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. 
Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. 
Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).";

$fp = fopen($filename, 'w');
fwrite($fp, $data);
fclose($fp);

$fp = fopen($filename, 'r');
$size = filesize($filename);
// $data = fread($fp, $size);
// $data = fgets($fp, $size);
// echo $data;

//reading a file line by line
/* while (!feof($fp)) {
    $data = fgets($fp, $size);
    echo $data;
} */