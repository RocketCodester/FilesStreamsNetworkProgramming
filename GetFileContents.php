<?php

$file = implode("\r\n", file("myfile.txt"));
echo "Old Way";
var_dump($file);

echo "New Way";
$file = file_get_contents("myfile.txt");
var_dump($file);