<?php
/* ------ Functions --------- */
/* Functions are reusable blocks of code that we can call to 
perform a specific task. We can pass values into functions to change 
their behevior. Functions have their own local
 scope as opposed to global scope
 */
/* 
 **Function  Syntax
 function functionName($arg1,$arg2, ....) {
    //code to be executed
 } 
 
 */

//  function registerUser()
//  {
//     echo 'User has been registered!';
//  }

//  //Running a function
//  registerUser();

//  function registerUser($email)
//  {
//     echo $email. ' registered';
//  }

//  //
//  registerUser('Florence');

// function add ($num1,$num2) {
//     echo "$num1 <br>";
//     return $num1 + $num2;
   
// }

// $sum = add(5,7);
// echo $sum;

/* 
function add ($num1 =5 ,$num2 = 7) {
    echo "$num1 <br>";
    return $num1 + $num2;
   
}

$sum = add();
echo $sum; */


// Arrow Functions
$Multiply = fn($num1, $num2) => $num1 * $num2;

echo $Multiply(3,5);