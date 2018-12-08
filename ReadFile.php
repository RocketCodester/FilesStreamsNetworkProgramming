<?php

$file = fopen("counter.txt", 'a+');
if ($file == false) {
    die ("Unable to open/create file");
}
if (filesize("counter.txt") == 0) {
    $counter = 0;
} else {
    $counter = (int) fgets($file);
}
ftruncate($file, 0);
fwrite($file, ++$counter);
echo "There has been $counter hits to this site.";