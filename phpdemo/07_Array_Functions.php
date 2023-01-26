<?php 
/* ------------ Array Functions ------------------ */
/* Functions to work with arrays
https://www.php.net/manual/en/ref.array.php
*/


// $fruits = ['apple', 'banana', 'orange'];

// //Get array length
// // echo count($fruits);

// //Search Array
// // echo in_array('banana', $fruits);
// // var_dump(in_array('banana',$fruits));


// $fruits[] = 'grape';
// array_push($fruits, 'mango', 'raspberry'); //add to the end using push
// array_unshift($fruits, 'kiwi'); //add to the start
// print_r($fruits);

// // remove from array
// array_pop($fruits); //remove the last one to enter
// array_shift($fruits); //remove the element from the beginning

// //remove specific element
// unset($fruits[2]);
// print_r($fruits); 

// //split into chunks of 2
// $chunkedArray = array_chunk($fruits, 2);
// print_r($chunkedArray);

//Concatenate Arrays
// $arr1 = [1,2,3];
// $arr2 = [4,5,6];
// $arr3 = array_merge($arr1,$arr2);
// print_r($arr3);
// $arr4 = [...$arr1, ...$arr2];
// print_r($arr4);

//Combine Arrays (Keys and Values)
// $a = ['green', 'red', 'yellow'];
// $b = ['avocado', 'apple', 'banan'];
// $c = array_combine($a,$b);
// print_r($c);


// //Array of Keys
// $keys=array_keys($c);
// print_r($keys);

// //Flip keys with values
// $flipped = array_flip($c);
// print_r($flipped);

//Create array of numbers with range
$numbers = range(1,20);
// // print_r($numbers);

// // //Map through array and create new one

// // $newNumbers = array_map(function($number){
// //     return "Number $number";
// // },$numbers);

// // print_r($newNumbers);

// //Filter array
// $lessThan5 = array_filter($numbers, fn($number)=> $number <=5);
// print_r($lessThan5);

//Array Reduce
$sum = array_reduce($numbers, fn($carry, $number)=>$carry + $number);
print_r($sum);