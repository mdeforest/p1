<?php
$csv_array = [];

if (($handle = fopen("data/quotes.csv", "r")) != FALSE) {
  while (($data = fgetcsv($handle, 0, ";")) != FALSE) {
    $num = count($data);
    for ($c=0; $c < $num; $c++) {
      array_push($csv_array, $data);
    }
  }
  fclose($handle);
}

$rand_num = rand(0, count($csv_array) - 1);
