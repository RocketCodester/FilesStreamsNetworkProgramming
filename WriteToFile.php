<?php

$data = "My Data";
file_put_contents("myfile.txt", $data, FILE_APPEND);
$data = array("More Data", "And More", "Even More");
file_put_contents("myfile.txt", $data, FILE_APPEND);