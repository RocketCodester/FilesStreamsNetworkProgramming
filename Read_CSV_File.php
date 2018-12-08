<?php

// open for reading and writing
$f = fopen('file.csv', 'a+');
$counter = 0;
while ($row = fgetcsv($f)) {
    // handle values
    echo "Array ",++$counter," created from CSV: ";
    var_dump($row);

}
$values = array(
    "Davey Shafik",
    "http://zceguide.com",
    "Win Prizes!"
);
echo "Array to be converted to CSV: ";
var_dump($values);
// append line to csv file
fputcsv($f, $values);
fclose($f);