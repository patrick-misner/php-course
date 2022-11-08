<?php

/* ---- Conditionals & Operators ---- */

/* ------------ Operators ----------- */

/*
  < Less than
  > Greater than
  <= Less than or equal to
  >= Greater than or equal to
  == Equal to
  === Identical to
  != Not equal to
  !== Not identical to
*/

/* ---------- If Statements --------- */

/*
** If Statement Syntax
if (condition) {
  // code to be executed if condition is true
}
*/

$age = 21;

// if ($age >= 18) {
//   echo 'You are old enough to vote';
// } else {
//   echo 'You are not old enough to vote';
// }


$t = date("H");


// if ($t < 12) {
//   echo 'Good Morning';
// } elseif ($t < 23) {
//   echo 'Good Afternoon';
// } else {
//   echo 'Good Evening';
// }

$posts = ['First Post'];

// if (true) {
//   echo 123;
// }

// if (!empty($posts)) {
//   echo $posts[0];
// } else {
//   echo 'No Posts';
// }

// echo !empty($posts) ? $posts[0] : 'No Posts';


// must have an ELSE, but you can set else to null;
// $firstPost = !empty($posts) ? $posts[0] : 'No Posts';
// echo $firstPost;

// coalescing operator

// $firstPost = $posts[0] ?? null;
// echo $firstPost;


$favcolor = 'green';

switch ($favcolor) {
  case 'red':
    echo 'Your favorite color is red';
    break;
  case 'blue':
    echo 'Your favorite color is blue';
    break;
  case 'green':
    echo 'Your favorite color is green';
    break;
  default:
    echo 'Your favorite color is not red, green, or blue';
}
