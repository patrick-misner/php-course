<?php

/* -------- Loops & Iteration ------- */

/* ------------ For Loop ------------ */

/*
** For Loop Syntax
  for (initialize; condition; increment) {
  // code to be executed
  }
*/


for ($x = 5; $x < 10; $x++) {
  // echo 'Number ' . $x . '<br>';
}


// $x = 1;

// while ($x <= 15) {
//   echo 'Number ' . $x . '<br>';
//   $x++;
// }

// while loop will only run if condition is met, do while will run the code then check the condition

// $x = 6;

// do {
//   echo 'Number ' . $x . '<br>';
//   $x++;
// } while ($x <= 5);



$posts = ['First Post', 'Second Post', 'Third Post'];


// for ($x = 0; $x < count($posts); $x++) {
//   echo $posts[$x];
// }

// foreach ($posts as $post) {
//   echo $post;
// }

// foreach ($posts as $index => $post) {
//   echo $index + 1 . ' - ' . $post . '<br>';
// }


$person = [
  'first_name' => 'Patrick',
  'last_name' => 'Misner',
  'email' => 'patrick@gmail.com',
];

foreach ($person as $key => $value) {
  echo "$key - $value<br>";
}
