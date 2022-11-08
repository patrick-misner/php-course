<?php

// echo 'helloarrays'

// Simple Array, first way
$numbers = [1, 44, 55, 22];

$fruits = array('apple', 'orange', 'pear');

// print_r($numbers);

// var_dump($numbers);

// echo $fruits[1];

// Associative Array
$colors = [
  1 => 'red',
  4 => 'blue',
  6 => 'green'
];

// echo $colors[4];

$hex = [
  'red' => '$f00',
  'blue' => '$0f0',
  'green' => '#00f'
];

// echo $hex['blue'];

$person = [
  'first_name' => 'Patrick',
  'last_name' => 'Misner',
  'email' => 'brad@gmail.com',
];

// echo $person['first_name'];


// multi-dimensional array
$people = [
  [
    'first_name' => 'Patrick',
    'last_name' => 'Misner',
    'email' => 'misner.patrick@gmail.com',
  ],
  [
    'first_name' => 'Jeff',
    'last_name' => 'Misner',
    'email' => 'jeff.misner@gmail.com',
  ],
  [
    'first_name' => 'Emily',
    'last_name' => 'Misner',
    'email' => 'emily.misner@gmail.com',
  ]
];

// echo $people[1]['email'];

var_dump(json_encode($people));
