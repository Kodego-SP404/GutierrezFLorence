<?php
/* ----------- Conditionals & Operators --------------- */
/* ----------- Operators ------------ */

/*
 < Less than 
 > Greater than
 <= Less than or equal to
 >= Greater than or equal to 
 === Equal to (assignment operator)
 === Identical to
 != Not equal to
 !== Not identical to
 */

 /* --------------If & If-Else Statements----------------- */
 /* ***If Statement Syntax
 * if (condition){
 * // code to be executed if condition is true
 * }
 */

//age=20, lets check if eligible to vote
// $age = 19;
// if ($age >= 18) {
//     echo 'You are eligible to vote!';
// } else {
//     echo 'You are not eligible to vote!';
// }

//1-12 morning; 13-17 afternoon; 18 evening
// $t = date('H');
// echo $t;

// if ($t <= 12) {
//     echo 'Good Morning!';
// } else if ($t<=17) {
//     echo 'Good Afternoon!';
// } else {
//     echo 'Good Evening!';
// }

//  $posts = ['oo'];

// if(!empty($posts)){
//     echo 13;
// }


// Ternary Operator

// The ternary operator is a shorthand if statement
// Ternary Syntax:
// condition ? true : false ;

// $firstPost = !empty($posts) ? $posts[0] : 'No posts';
// echo $firstPost;

//Switch Statements 
// $favcolor = 'red';

// switch ($favcolor){
//     case 'red':
//         echo 'Your favorite color is red.';
//         break;
//     case 'green':
//         echo 'Your favorite color is green.';
//         break;
//     case 'blue':
//         echo 'Your favorite color is blue.';
//         break;
//     default:
//     echo 'Your favorite color is neither red, green nor blue.';
        
// }