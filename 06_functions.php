<?php
/* ------------ Functions ----------- */

/*
** Function Syntax
  function functionName($arg1, $arg2, ...) {
    // code to be executed
  }
  - Functions have their own local scope as opposed to global scope
  you can use global variable by typing global $y inside the function
  inside the function you define the argument, when calling the function you provide the parameter.
*/


function registerUser($email)
{
  echo $email . "registered";
}

// registerUser('Patrick ');

function sum($n1 = 2, $n2 = 5)
{
  return $n1 + $n2;
}

$number = sum();
// echo $number;


$subtract = function ($n1, $n2) {
  return $n1 - $n2;
};

// echo $subtract(10, 5);

// $multiply = function ($n1, $n2) {
//   return $n1 * $n2;
// };

$multiply = fn ($n1, $n2) => $n1 * $n2;


echo $multiply(9, 9);
