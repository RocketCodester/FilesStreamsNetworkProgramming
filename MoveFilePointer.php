<?php


$file = fopen('counter.txt', 'r+');
$filePointerPosition = ftell($file);
print "Initial File Pointer Position: $filePointerPosition<br>";
$a = fseek($file, 1, SEEK_SET);
$filePointerPosition = ftell($file);
print "Modified File Pointer Position: $filePointerPosition<br>";
