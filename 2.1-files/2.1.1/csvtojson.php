<?php

$csv = array_map('str_getcsv', file('data.csv'));

$json = json_encode($csv);

$file = 'data.json';

$csvToJson = file_put_contents($file, $json);

?>