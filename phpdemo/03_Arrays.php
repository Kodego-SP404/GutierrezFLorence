<?php
/* ----------------- ARRAYS ---------------------- */


/* Array hold multiple values. Each value in an array is called "element". */


//Simple array of numbers
// $numbers = [1,2,3,4,5];
// $fruits = ['apple','banana','orange'];

/* echo $numbers[0]; */
/* var_dump($numbers); */
//echo $fruits[2];
// echo $numbers[2] + $numbers[3];

//Associative Arrays
// Associative arrays allows us to use named keys to identify values

// $colors = [
//     1=> 'red',
//     2=> 'green',
//     3=> 'blue',
//     4=> 'yellow',
// ];

// echo $colors[3];
// echo '<br>';
// echo $colors[4];

// Strings as keys
// $hex = [
//     'red'=>'#f00',
//     'green'=>'#0f0',
//     'blue'=>'#00f'
// ];

// echo $hex['red'];

//Multidimensional Arrays
//Multi-dimensional arrays are often used to store data in a table format.

//Single Person
// $person = [
//     'first_name'=>'Florence',
//     'last_name'=>'Gutierrez',
//     'email'=>'florencegutierrezmain@gmail.com'
// ];

// echo $person['first_name'];

// Multi-dimensional Array
// $people = [
//     [
//         'first_name'=>'Florence',
//         'last_name'=>'Gutierrez',
//         'email'=>'florencegutierrezmain@gmail.com',
//     ],
    
//     [
//         'first_name'=>'Pau',
//         'last_name'=>'Harina',
//         'email'=>'pauharinamain@gmail.com',
//     ],
    
//     [
//         'first_name'=>'Chester',
//         'last_name'=>'Gutierrez',
//         'email'=>'chestergutierrezmain@gmail.com',
//     ],
    
// ];

// echo $people[0]['email'];

// //Encode to JSON
// var_dump(json_encode($people));

// //Decode to JSON
// $jsonobj = '{"first_name":"Florence","last_name":"Gutierrez","email":"florencegutierrezmain@gmail.com"}';
// var_dump(json_decode($jsonobj));


 