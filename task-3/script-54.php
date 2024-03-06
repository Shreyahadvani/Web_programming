<?php
$a = array
(
  array
  (
    'id' => 5698,
    'first_name' => 'shreya',
    'last_name' => 'patel',
  ),
  array
  (
    'id' => 4767,
    'first_name' => 'gaurav',
    'last_name' => 'hadvani',
  ),
  array
  (
    'id' => 3809,
    'first_name' => 'komal',
    'last_name' => 'faldu',
  )
);
$last_names = array_column($a, 'last_name');
print_r($last_names);
?>