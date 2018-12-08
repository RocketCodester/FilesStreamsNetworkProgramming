<?php

$f = fopen('https://www.google.com/', 'r');
$page = '';
if ($f) {
    while ($s = fread($f, 1000)) {
        $page .= $s;
    }
} else {
    throw new Exception(
        "Unable to open connection to www.phparch.com"
    );
}
//echo $page;
print $page;