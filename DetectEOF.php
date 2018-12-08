<?php

if (!file_exists ("counter.txt")) {
    throw new Exception ("The file does not exists");
}
$file = fopen("counter.txt", "r");
$txt = '';
while (!feof($file)) {
    $txt .= fread($file, 1);
}
echo "There have been $txt hits to this site.";