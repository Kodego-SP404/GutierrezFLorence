<?php
/* -------- String Functions -------- */
 /* Functions to work with strings 
 https://www.php.net/manual/en/ref.strings.php
 */

 $string = 'Hello World';

 // Get the length of a string 
 echo strlen($string);
 echo "<br>";

 // Find the position of the first occurence of a substring in a string
 echo strpos($string, 'o');
 echo "<br>";

 // Find the position of the last occurence of a substring in a string
 echo strrpos($string, 'o');
 echo "<br>";

 // Reverse a stringecho strrev($string);
 echo "<br>";

 // Convert all characters to lowercase
 echo strtolower($string);
 echo "<br>";

 // Convert all characters to uppercase 
 echo strtoupper($string);
 echo "<br>";

 //Uppercase the first character of each word 
 echo ucwords($string);
 echo "<br>";

 // String replace
echo  str_replace('World', 'Everyone', $string);
echo "<br>";

// Return position of a string specified by the offset and length 
echo substr($string, 0, 5);
echo "<br>";
echo substr($string, 5);
echo "<br>";

// Starts with
if (str_starts_with($string, 'Hello')) {
    echo 'Yes';
}
echo "<br>";

// Ends with 
if (str_ends_with($string, 'ld')) {
    echo 'Yes';
}
echo "<br>";

// HTML Entities
$string3 = '<h1> Hello </h1>';
echo $string3;
$string2 = '<h1> Hello World </h1>';
echo htmlentities($string2);
echo $string2;
echo "<br>";

// Formatted Strings - useful when you have outside data
// Different specifiers for different data types
printf('%s is a %s', 'Florence', 'nice guy');
echo "<br>";
printf('1+1=%f', 1+1); //float